<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Lead {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'nome' => 'David Henrique',
                'celular' => '(11) 91679-6133',
                'situacao' => 'CNH Suspensa'
            ],
            [
                'id' => 2,
                'nome' => 'Fábio Antonio',
                'celular' => '(17) 97879-6145',
                'situacao' => 'Bafômetro'
            ],
            [
                'id' => 3,
                'nome' => 'Roberto Carlos',
                'celular' => '(25) 94329-6533',
                'situacao' => 'Pontuação na CNH'
            ]
            ];
    }

    public static function find(int $id): array
    {
        $lead = Arr::first(static::all(), fn($lead) => $lead['id'] == $id);

        if (! $lead){
            abort(404);
        }

        return $lead;
    }
}