<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Repositories\Admin\EmailRepository;
use App\Repositories\Admin\PermissionRepository;
use App\Repositories\Admin\PhoneRepository;
use App\Repositories\Admin\SystemRepository;
use App\Repositories\Admin\UserRepository;

class AdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adim user resources';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    protected $choseFunction;
    protected $data;
    protected $id;
    protected $email;
    protected $permission;
    protected $phone;
    protected $system;
    protected $user;
    protected $userData;

    public function __construct(
        EmailRepository $email,
        PermissionRepository $permission,
        PhoneRepository $phone,
        SystemRepository $system,
        UserRepository $user
    )
    {
        parent::__construct();

        $this->email = $email;
        $this->permission = $permission;
        $this->phone = $phone;
        $this->system = $system;
        $this->user = $user;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->choseFunction = $this->choice('Choose a function:', ['create', 'update', 'block', 'unblock', 'delete'], 0);

        $headers = ['id','name','rg','cpf','workplace','system_id'];
        switch ($this->choseFunction) {
            case 'create':
                $this->data = $this->getData();
                $created = $this->create();

                $this->info("User created");
                $this->table($headers, [$created]);
                break;

            case 'update':
                $this->id = $this->getId();
                $this->data = $this->getData();
                $updated = $this->update();

                $this->info("User updated");
                $this->table($headers, [$updated]);
                break;
            
            case 'block':
                $this->id = $this->getId();
                $blocked = $this->block();
                $this->info("User blocked");
                break;
            
            case 'unblock':
                $this->id = $this->getId();
                $unblocked = $this->unblock();
                $this->info("User unblocked");
                break;

            case 'delete':
                $this->id = $this->getId();
                $deleted = $this->delete();
                $this->info("User deleted");
                break;
        }

    }

    public function verifyArgument ($argument)
    {
        $validChose = ['create', 'update', 'block', 'unblock', 'delete'];
        $wrongMsg = "Table must be: ".implode(', ', $validChose);
        if (!in_array($argument,$validChose)) {
            $this->error($wrongMsg);
            return false;
        }
        return $argument;
    }

    public function getId ()
    {
        $id = '';
        $confirmed = false;
        do {
            $data = $this->ask("Please insert user id");
            if ($data) {
                $getUser = $this->user->findOrFail($data);
                if ($getUser && $getUser->data && $this->confirm("Confirm user? ".$getUser->data->name)) {
                    $this->userData = $getUser->data->toArray();
                    $confirmed = true;
                }
            }
        } while (!$confirmed);
        return $data;
    }

    public function getData ()
    {
        $data['name'] = $this->getOnlyRequired('Name');
        $data['rg'] = $this->getOnlyRequired('RG');
        $data['cpf'] = $this->getOnlyRequired('CPF');
        $data['workplace'] = $this->getOnlyRequired('Workplace');
        $data['system_id'] = $this->getSystemData();
        if ($this->choseFunction == 'create') $data['password'] = $data['rg'];
        else $data['password'] = $this->getPassword();
        return $data;
    }

    public function getOnlyRequired ($field)
    {
        $data = '';
        $confirmed = false;
        $fieldUser = $this->userData ? $this->userData[strtolower($field)] : false;
        $question = "Please insert $field";
        do {
            if (!$fieldUser) $data = $this->ask($question);
            else {
                $data = $this->anticipate($question, function () use($fieldUser){
                    return [$fieldUser];
                });
            }
            if ($this->confirm("Confirm data? ".$data)) $confirmed = true;
        } while (!$data || !$confirmed);
        return $data;
    }

    public function getPassword ()
    {
        $data = '';
        $confirmed = false;
        do {
            $data = $this->secret("Please insert password");
            $confirm = $this->secret("Please confirm password");
            if ($data && $confirm) {
                if ($data === $confirm) $confirmed = true;
                else $this->error("Password and confirmation not match");
            }
        } while (!$confirmed);
        return $data;
    }

    public function getSystemData ()
    {
        $data = '';
        $confirmed = false;

        do {
            $data = $this->ask("Please insert System (Name or id) ");
            if ($data) {
                $systemId = $this->getSystem($data);
                if (!$systemId) {
                    $this->error("Invalid System!");
                } else {
                    $confirmed = true;
                    $data = $systemId ;
                }
            }
        } while (!$confirmed);
        return $data;

    }

    public function getSystem ($data)
    {
        if (is_int($data)) $system = $this->system->findOrFail($data);
        $system = $this->system->getByName($data);
        if ($system) return $system->id;
        return null;
    }

    public function create ()
    {
        $data = $this->user->create($this->data);
        if (isset($data->data)) return $data->data->toArray();
        else $this->error('Not created');
    }

    public function update ()
    {
        $data = $this->user->findAndUpdate($this->id, $this->data);
        if ($data->headers['returnType'] == "success") {
            $getUser = $this->user->findOrFail($this->id);
            return $getUser->data->toArray();
        }
        else $this->error('Not updated');
    }

    public function block ()
    {
        $data = $this->user->block($this->id);
        if ($data->headers['returnType'] == "success") {
            $getUser = $this->user->findOrFail($this->id);
            return $getUser->data->toArray();
        }
        return $data->data->toArray();
    }

    public function unblock ()
    {
        $data = $this->user->unblock($this->id);
        if ($data->headers['returnType'] == "success") {
            $getUser = $this->user->findOrFail($this->id);
            return $getUser->data->toArray();
        }
        return $data->data->toArray();
    }

    public function delete ()
    {
        $data = $this->user->findAndDelete($this->id);
        if ($data->headers['returnType'] == "success") return true;
        return false;
    }
}
