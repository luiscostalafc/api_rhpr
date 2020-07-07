<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Repositories\Admin\EmailRepository;
use App\Repositories\Admin\PermissionRepository;
use App\Repositories\Admin\PhoneRepository;
use App\Repositories\Admin\SystemRepository;
use App\Repositories\Admin\UserRepository;

class AdminList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:list {tableName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List admin resources';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    protected $tableName;
    protected $email;
    protected $permission;
    protected $phone;
    protected $system;
    protected $user;
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
        $this->tableName = $this->verifyArgument($this->argument('tableName'));
        if (!$this->tableName) exit;

        $headers = $this->getHeader();
        $data = $this->getData();

        $this->table($headers, $data);
    }

    public function verifyArgument ($argument)
    {
        $validTables = config('api_configs.admin_tables');
        $wrongMsg = "Table must be: ".implode(', ', $validTables);
        if (!in_array($argument,$validTables)) {
            $this->error($wrongMsg);
            return false;
        }
        return $argument;
    }

    public function getHeader ()
    {
        $data = $this->{$this->tableName}->first();
        return array_keys($data->data->toArray());
    }

    public function getData ()
    {
        $data = $this->{$this->tableName}->all();
        return $data->data->toArray();
    }
}
