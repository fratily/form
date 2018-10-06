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
interface FormBuilderInterface{

    /**
     * フォームインスタンスを生成する
     *
     * @return  FormInterface
     */
    public function build(): FormInterface;

    /**
     * フォームの名前を取得する
     *
     * @return  null|string
     */
    public function getName();

    /**
     * フィールドをすべて取得する
     *
     * @return  FieldInterface[]
     */
    public function getAll();

    /**
     * フィールドを取得する
     *
     * @param   string  $name
     *  フィールド名
     *
     * @return  FieldInterface
     *
     * @throws  \LogicException
     */
    public function get(string $name);

    /**
     * フィールドが存在するか確認する
     *
     * @param   string  $name
     *  フィールド名
     *
     * @return  bool
     */
    public function has(string $name);

    /**
     * フィールドを追加する
     *
     * @param   string  $name
     *  フィールド名
     * @param   FieldInterface  $field
     *  フィールドインスタンス
     *
     * @return  $this
     */
    public function add(string $name, FieldInterface $field);

    /**
     * フィールドを削除する
     *
     * @param   string  $name
     *  フィールド名
     *
     * @return  $this
     */
    public function remove(string $name);
}