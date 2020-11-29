<?php

namespace App\Repositories;

use App\Models\CV;

class CvRepository
{
    private string $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }

    public function getAll(): array
    {
        $allCVmodels = [];
        $allCVs = query()
            ->select('*')
            ->from($this->table)
            ->execute()
            ->fetchAllAssociative();

        foreach ($allCVs as $cv) {
            $id = $cv['id'];
            $basicData = json_decode($cv['basic_data']);
            $pitch = $cv['pitch'];
            $education = (array)json_decode($cv['education']);
            $workExperience = (array)json_decode($cv['work_experience']);
            $other = (array)json_decode($cv['other']);
            $image = $cv['image'];

            $newCV = new CV($basicData->name, $basicData->sname, $basicData->email, $basicData->phoneNumber);
            $newCV->setId($id);
            $newCV->setPitch($pitch);
            $newCV->setEducation($education);
            $newCV->setWorkExperience($workExperience);
            $newCV->setOther($other);
            $newCV->setImage($image);

            $allCVmodels[] = $newCV;


        }

        return $allCVmodels;
    }

    public function storeOne(CV $cv): void
    {

        query()
            ->insert($this->table)
            ->values([
                'email' => ':email',
                'basic_data' => ':basicData',
                'pitch' => ':pitch',
                'education' => ':education',
                'work_experience' => ':workExperience',
                'other' => ':other',
                'image' => ':image'

            ])
            ->setParameters([
                'email' => $cv->getEmail(),
                'basicData' => json_encode(['name' => $cv->getName(), 'sname' => $cv->getSname(), 'email' => $cv->getEmail(), 'phoneNumber' => $cv->getPhoneNumber()]),
                'pitch' => $cv->getPitch(),
                'education' => json_encode($cv->getEducation()),
                'workExperience' => json_encode($cv->getWorkExperience()),
                'other' => json_encode($cv->getOther()),
                'image' => $cv->getImage()
            ])
            ->execute();

    }

    public function isStored(string $email): bool
    {
        $query = query()
            ->select('*')
            ->from($this->table)
            ->where('email = :email')
            ->setParameter(':email', $email)
            ->execute()
            ->fetchAssociative();

        if ($query == false) {
            return false;
        }
        return true;
    }

    public function getId(CV $cv): string
    {
        $id = query()
            ->select('id')
            ->from($this->table)
            ->where('email = :email')
            ->setParameter(':email', $cv->getEmail())
            ->execute()
            ->fetchAssociative();

        return (string)$id;
    }

    public function getOne($id): CV
    {
        $cv = query()
            ->select('*')
            ->from($this->table)
            ->where('id = :id')
            ->setParameter(':id', $id)
            ->execute()
            ->fetchAssociative();

        $id = $cv['id'];
        $basicData = json_decode($cv['basic_data']);
        $pitch = $cv['pitch'];
        $education = (array)json_decode($cv['education']);
        $workExperience = (array)json_decode($cv['work_experience']);
        $other = (array)json_decode($cv['other']);
        $image = $cv['image'];

        $newCV = new CV($basicData->name, $basicData->sname, $basicData->email, $basicData->phoneNumber);
        $newCV->setId($id);
        $newCV->setPitch($pitch);
        $newCV->setEducation($education);
        $newCV->setWorkExperience($workExperience);
        $newCV->setOther($other);
        $newCV->setImage($image);

        return $newCV;
    }

    public function storeImage(CV $cv)
    {
        query()
            ->update($this->table)
            ->set('image', ':image')
            ->where('id = :id')
            ->setParameter(':id', $cv->getId())
            ->setParameter(':image', $cv->getImage())
            ->execute();
    }


    public function updateStored(CV $cv): void
    {
        query()
            ->update($this->table)
            ->set('email', ':email')
            ->set('basic_data', ':basicData')
            ->set('pitch', ':pitch')
            ->set('education', ':education')
            ->set('work_experience', ':workExperience')
            ->set('other', ':other')
            ->where('id = :id')
            ->setParameter(':id', $cv->getId())
            ->setParameter(':email', $cv->getEmail())
            ->setParameter(':basicData', json_encode(['name' => $cv->getName(), 'sname' => $cv->getSname(), 'email' => $cv->getEmail(), 'phoneNumber' => $cv->getPhoneNumber()]))
            ->setParameter(':pitch', $cv->getPitch())
            ->setParameter(':education', json_encode($cv->getEducation()))
            ->setParameter(':workExperience', json_encode($cv->getWorkExperience()))
            ->setParameter(':other', json_encode($cv->getOther()))
            ->execute();

    }


}