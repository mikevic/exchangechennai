<?php
/**
 * This class contains convenience methods for working with apps.
 * Both PodioApp and PodioItem inherit from this class.
 * This structure is mainly in place to make it easier to work
 * with collections og PodioAppField and PodioItemField.
 */
class PodioSuperApp extends PodioObject {
  /**
   * Returns the field matching the given field_id or external_id
   */
  public function field($field_id_or_external_id) {
    $key = is_int($field_id_or_external_id) ? 'field_id' : 'external_id';
    foreach ($this->fields as $field) {
      if ($field->{$key} == $field_id_or_external_id) {
        return $field;
      }
    }
    return null;
  }

  /**
   * Returns all fields of the given type on this item
   */
  public function fields_of_type($type) {
    $list = array();
    foreach ($this->fields as $field) {
      if ($field->type == $type) {
        $list[] = $field;
      }
    }
    return $list;
  }

  /**
   * Returns all external_ids in use on this item
   */
  public function external_ids() {
    return array_map(function($field){
      return $field->external_id;
    }, $this->fields);
  }
}
