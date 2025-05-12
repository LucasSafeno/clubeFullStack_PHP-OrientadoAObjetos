<?php

namespace app\models;

class Model
{

    public function all()
    {
        return "Listando os dados da tabela {$this->table}";
    } //all

    public function findBy()
    {

    }// findBy

    public function delete()
    {
        return "Deletando os dados da tabela {$this->table}";
    } // delete

    public function update()
    {
        return "Atualizando os dados da tabela {$this->table}";
    }// update


}