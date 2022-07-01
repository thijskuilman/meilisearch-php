<?php

declare(strict_types=1);

namespace Tests\Contracts;

use PHPUnit\Framework\TestCase;
use MeiliSearch\Contracts\DocumentsQuery;

class DocumentsQueryTest extends TestCase
{
    public function testSetFields(): void
    {
        $data = (new DocumentsQuery())->setLimit(10)->setFields(['abc', 'xyz']);

        $this->assertEquals($data->toArray(), ['limit' => 10, 'fields' => 'abc,xyz']);
    }

    public function testToArrayWithoutSetFields(): void
    {
        $data = (new DocumentsQuery())->setLimit(10);

        $this->assertEquals($data->toArray(), ['limit' => 10]);
    }

    public function testToArrayWithoutSetOffset(): void
    {
        $data = (new DocumentsQuery())->setOffset(10);

        $this->assertEquals($data->toArray(), ['offset' => 10]);
    }
}
