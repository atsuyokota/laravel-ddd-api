<?php

namespace Demo\UI\Http\Resources;

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
            'name' => $user->name(),
            'email' => $user->email(),
            'gender' => $user->gender(),
            'date_of_birth' => $user->dateOfBirth()
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
