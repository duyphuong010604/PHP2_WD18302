<?php

namespace App\Models;

interface CRUDInterface
{
    /**
     * getAll() goi tat ca du lieu
     */
    public function getAll();
    /**
     *  getOne() goi mot hang du lieu
     * @param int $id
     * @return array $record
     */

    public function getOne(int $id);

    /**
     * Create() ham su dung them du lieu
     * @param array $data
     * @return array $data | ind $id
     */

    public function create(array $data);

    /**
     * update() ham nay dung de cap nhat thong tin
     * @param int $id
     * @param array $data
     * @return array $data | int $id
     */
    public function update(int $id, array $data);

    /**
     * delete() ham xoa mot hang trong csdl
     * @param int $id
     * @return boolean
     */
    public function delete(int $id): bool;

}