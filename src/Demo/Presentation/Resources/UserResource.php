<?php

namespace Demo\Presentation\Resources;

use Demo\Domain\Model\User;

class UserResource
{
    /**
     * Transform the resource into an array.
     *
     * @param User $user
     * @return array
     */
    public function toArray(User $user)
    {
        return [
            'id' => $user->id(),
            'name' => $user->name()->value(),
            'email' => $user->email()->value(),
            'gender' => $user->gender()->value(),
            'date_of_birth' => $user->dateOfBirth()->value(),
            'senior' => $user->dateOfBirth()->isSenior()
        ];
    }

    public function collection($items)
    {
        if (empty($items)) {
            return [];
        }
        $data = $items->map(function ($item) {
            return $this->toArray($item);
        });
        return array_values($data->toArray());
    }
}
