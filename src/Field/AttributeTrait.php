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
trait AttributeTrait{

    /**
     * @var string[]
     */
    private $attributes = [];

    /**
     * 属性をすべて取得する
     *
     * @return  string[]
     */
    public function getAttributes(){
        return $this->attributes;
    }

    /**
     * 属性を取得する
     *
     * @param   string  $attr
     *  属性名
     *
     * @return  string|null
     */
    public function getAttribute(string $attr){
        return $this->attributes[$attr] ?? null;
    }

    /**
     * 属性が存在するか確認する
     *
     * @param   string  $attr
     *  属性名
     *
     * @return  bool
     */
    public function hasAttribute(string $attr){
        return array_key_exists($attr, $this->attributes);
    }

    /**
     * 属性を登録する
     *
     * @param   string  $attr
     *  属性名
     * @param   string  $value
     *  属性値
     *
     * @return  $this
     */
    public function setAttribute(string $attr, string $value){
        if(1 !== preg_match("/\A[a-z-]\z/", $attr)){
            throw new \InvalidArgumentException;
        }

        if(1 !== preg_match("/\A[^\n\"]*\z/", $value)){
            throw new \InvalidArgumentException;
        }

        $this->attributes[$attr]    = $value;

        return $this;
    }

    /**
     * 属性を削除する
     *
     * @param   string  $attr
     *  属性名
     *
     * @return  $this
     */
    public function removeAttribute(string $attr){
        unset($this->attributes[$attr]);

        return $this;
    }
}