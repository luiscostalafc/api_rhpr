<?php

return [
  'maximun_strikes' => 3,
  'admin_tables' => ['email', 'permission', 'phone', 'system', 'user'],
  'required_filables' => [
    'email' => ['email', 'user_id'],
    'permission' => ['permission'],
    'phone' => ['type_phone', 'number', 'user_id'],
    'system' => ['system', 'ip'],
    'user' => ['name', 'rg', 'password', 'cpf', 'worplace', 'system_id'],
  ]
];