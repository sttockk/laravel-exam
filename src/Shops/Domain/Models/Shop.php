<?php

namespace Shops\Domain\Models;


use Shops\Contracts\DataTransferObjects\ShopDto;
use App\Helpers\DomainModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Query\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Shop extends DomainModel implements AuthorizableContract
{
    use HasFactory;
    use Notifiable;
    use Authorizable;

    public function fillableRules(): array
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'url' => ['required', 'url'],
        ];
    }

    public function toDto(): mixed
    {
        return new ShopDto(
            id: $this->id,
            title: $this->title,
            url: $this->url,
            created_at: $this->created_at,
            updated_at: $this->updated_at
        );
    }

    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    public function scopeMaybeSearch($query, ?string $q)
    {
        if ($q !== null and $q !== '') {
            $query->where('title', 'like', "%{$q}%")->orWhere('url', 'like', "%{$q}%");
        }
    }
}
