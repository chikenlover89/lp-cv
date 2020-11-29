<?php

namespace App\Models;

class CV{
    private string $name;
    private string $sname;
    private string $email;
    private string $phoneNumber;
    private string $pitch;
    private string $id;
    private array $workExperience;
    private array $education;
    private array $other;
    private string $image = '';

    public function __construct(string $name, string $sname,string $email, string $phoneNumber)
    {
        $this->name = $name;
        $this->sname = $sname;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSname(): string
    {
        return $this->sname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getPitch(): string
    {
        return $this->pitch;
    }

    public function setPitch(string $pitch): void
    {
        $this->pitch = $pitch;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getEducation(): array
    {
        return $this->education;
    }

    public function setEducation(array $education): void
    {
        $this->education = $education;
    }


    public function setWorkExperience(array $workExperience): void
    {
        $this->workExperience = $workExperience;
    }

    public function getWorkExperience(): array
    {
        return $this->workExperience;
    }

    public function getOther(): array
    {
        return $this->other;
    }

    public function setOther(array $other): void
    {
        $this->other = $other;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}