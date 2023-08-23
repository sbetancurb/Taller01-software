<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES

     * $this->attributes['id'] - int - contains the user primary key (id)

     * $this->attributes['name'] - string - contains the username

     * $this->attributes['password'] - string - contains password of the user

     * $this->attributes['email'] - string - contains email of the user

     * $this->attributes['address'] - string - contains address of the user

     * $this->attributes['wallet'] - int - contains the economic capital of the user

     * $this->attributes['rol'] - string - contains rol of the user (common user/admin)
     */
    protected $fillable = ['name', 'email', 'password', 'address', 'rol', 'wallet'];

    public function getId(): int
    {

        return $this->attributes['id'];

    }

    public function setId($id): void
    {

        $this->attributes['id'] = $id;

    }

    public function getName(): string
    {

        return $this->attributes['name'];

    }

    public function setName($name): void
    {

        $this->attributes['name'] = $name;

    }

    public function getPassword(): string
    {

        return $this->attributes['password'];

    }

    public function setPassword($password): void
    {

        $this->attributes['password'] = $password;

    }

    public function getEmail(): string
    {

        return $this->attributes['email'];

    }

    public function setEmail($email): void
    {

        $this->attributes['email'] = $email;
    }

    public function getAddress(): string
    {

        return $this->attributes['address'];

    }

    public function setAddress($address): void
    {

        $this->attributes['address'] = $address;
    }

    public function getWallet(): int
    {

        return $this->attributes['wallet'];

    }

    public function setWallet($wallet): void
    {

        $this->attributes['wallet'] = $wallet;
    }

    public function getRol(): string
    {

        return $this->attributes['rol'];

    }

    public function setRol($rol): void
    {

        $this->attributes['rol'] = $rol;
    }
}
