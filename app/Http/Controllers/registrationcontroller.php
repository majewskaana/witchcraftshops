protected function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        // Add additional fields here
        'phone' => $data['phone'],
        'address' => $data['address'],
    ]);
}

