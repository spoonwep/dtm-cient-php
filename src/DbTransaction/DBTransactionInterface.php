<?php

declare(strict_types=1);
/**
 * This file is part of DTM-PHP.
 *
 * @license  https://github.com/dtm-php/dtm-client/blob/master/LICENSE
 */
namespace DtmClient\DbTransaction;

interface DBTransactionInterface
{
    public function beginTransaction();

    public function commit();

    public function rollback();

    public function execute(string $sql, array $bindings = []): int;

    public function xaExecute(string $sql, array $bindings = []): int;

    public function xaQuery(string $sql, array $bindings = []);

    public function xaExec(string $sql);
}
