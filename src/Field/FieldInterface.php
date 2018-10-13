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
interface FieldInterface{

    /**
     * Constructor
     *
     * @param   string  $name
     *  フィールド名
     */
    public function __construct(string $name);

    /**
     * 無効か確認する
     *
     * @return  bool
     */
    public function isDisabled();

    /**
     * 有効にする
     *
     * @return  $this
     */
    public function enabled();

    /**
     * 無効にする
     *
     * @return  $this
     */
    public function disabled();

    /**
     * 複数要素か確認する
     *
     * @return  bool
     */
    public function isMultiple();

    /**
     * 単一要素にする
     *
     * @return  $this
     */
    public function single();

    /**
     * 複数要素にする
     *
     * @return  $this
     */
    public function multiple();

    /**
     * 必須要素か確認する
     *
     * @return  bool
     */
    public function isRequired();

    /**
     * 必須要素にする
     *
     * @return  $this
     */
    public function required();

    /**
     * 任意要素にする
     *
     * @return  $this
     */
    public function notRequired();

    /**
     * フィールド名を取得する
     *
     * @return  string
     */
    public function getName();

    /**
     * ラベルを取得する
     *
     * @return  string|null
     */
    public function getLavel();

    /**
     * ラベルを設定する
     *
     * @param   string  $lavel
     *  ラベル文字列
     *
     * @return  $this
     */
    public function setLavel(string $lavel);

    /**
     * IDを取得する
     *
     * @return  string|null
     */
    public function getId();

    /**
     * IDを設定する
     *
     * @param   string  $id
     *  ID文字列
     */
    public function setId(string $id);

    /**
     * 属性をすべて取得する
     *
     * @return  string[]
     */
    public function getAttributes();

    /**
     * 属性を取得する
     *
     * @param   string  $attr
     *  取得する属性名
     *
     * @return  string|null
     */
    public function getAttribute(string $attr);

    /**
     * 属性が指定されているか確認する
     *
     * @param   string  $attr
     *  確認する属性名
     *
     * @return  bool
     */
    public function hasAttribute(string $attr);

    /**
     * 属性を追加する
     *
     * すでに同名の属性が存在した場合は上書きされる。
     *
     * @param   string  $attr
     *  追加する属性名
     * @param   string  $value
     *  値
     *
     * @return  $this
     */
    public function setAttribute(string $attr, string $value);

    /**
     * 属性を削除する
     *
     * @param   string  $attr
     *  削除する属性名
     *
     * @return  $this
     */
    public function removeAttribute(string $attr);
}