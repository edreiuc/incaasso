<?php
namespace App\Model\Table;

use App\Model\Entity\Article;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 *
 */
class ArticlesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('articles');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('titre', 'create')
            ->notEmpty('titre');
            
        $validator
            ->requirePresence('info', 'create')
            ->notEmpty('info');
            
        $validator
            ->add('datePublication', 'valid', ['rule' => 'date'])
            ->requirePresence('datePublication', 'create')
            ->notEmpty('datePublication');
            
        $validator
            ->requirePresence('autor', 'create')
            ->notEmpty('autor');

        return $validator;
    }
}
