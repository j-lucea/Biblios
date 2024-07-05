<?php

namespace App\Enum;

enum CommentStatus: string
{
    case Pending = 'pending';
    case Published = 'deactivated';
    case Moderated = 'moderated';

    public function getLabel(): string
    {
        return match ($this) {
          self::Pending => 'En attente',
          self::Published => 'Publié',
          self::Moderated => 'Modéré',
        };
    }
}