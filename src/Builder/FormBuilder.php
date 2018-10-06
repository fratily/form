<?php
/**
 * FratilyPHP Form
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.
 * Redistributions of files must retain the above copyright notice.
 *
 * @author      Kento Oka <kento-oka@kentoka.com>
 * @copyright   (c) Kento Oka
 * @license     MIT
 * @since       1.0.0
 */
namespace Fratily\Form\Builder;

use Fratily\Form\FormInterface;
use Fratily\Form\Fields\FieldInterface;

/**
 *
 */
class FormBuilder implements FormBuilderInterface{

    /**
     * @var string
     */
    private $name;

    /**
     * @var Field\FieldInterface[]
     */
    private $fields = [];

    /**
     * Constructor
     *
     * @param   string  $name
     *  フォーム名
     */
    public function __construct(string $name){
        if(1 !== preg_match("/\A[A-Z-_][0-9A-Z-_]*\z/i", $name)){
            throw new \InvalidArgumentException();
        }

        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function build(): FormInterface{
    }

    /**
     * {@inheritdoc}
     */
    public function getName(){
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getAll(){
        return $this->fields;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $name){
        if(!$this->has($name)){
            throw new \LogicException;
        }

        return $this->fields[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function has(string $name){
        return array_key_exists($name, $this->fields);
    }

    /**
     * {@inheritdoc}
     */
    public function add(string $name, FieldInterface $field){
        if(1 !== preg_match("/\A[A-Z-_][0-9A-Z-_]*\z/i", $name)){
            throw new \InvalidArgumentException();
        }

        if($this->has($name)){
            throw new \LogicException;
        }

        $this->fields[$name]  = $field;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(string $name){
        if($this->has($name)){
            unset($this->fields[$name]);
        }

        return $this;
    }
}