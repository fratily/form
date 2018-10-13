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
namespace Fratily\Form\Field;

/**
 *
 */
class AbstractField implements FieldInterface{

    use AttributeTrait;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Lavel|null
     */
    private $lavel;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var bool
     */
    private $disabled   = false;

    /**
     * @var bool
     */
    private $multiple   = false;

    /**
     * @var bool
     */
    private $required   = false;

    /**
     * {@inheritdoc}
     */
    public function __construct(string $name){
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function isDisabled(){
        return $this->disabled;
    }

    /**
     * {@inheritdoc}
     */
    public function enabled(){
        $this->disabled = false;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function disabled(){
        $this->disabled = true;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isMultiple(){
        return $this->multiple;
    }

    /**
     * {@inheritdoc}
     */
    public function single(){
        $this->multiple = false;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function multiple(){
        $this->multiple = true;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isRequired(){
        return $this->required;
    }

    /**
     * {@inheritdoc}
     */
    public function required(){
        $this->required = true;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function notRequired(){
        $this->required = false;

        return $this;
    }

    /**
     * フィールド名を取得する
     *
     * @return  string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getLavel(){
        return $this->lavel;
    }

    /**
     * {@inheritdoc}
     */
    public function setLavel(string $lavel){
        $this->lavel    = new Lavel($lavel);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getId(){
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId(string $id){
        if(1 !== preg_match("/\A[0-9a-z]+\z/", $id)){
            throw new \InvalidArgumentException;
        }

        $this->id   = $id;

        return $this;
    }
}