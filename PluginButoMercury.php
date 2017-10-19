<?php
/**
 * Plugin to help maintain Buto.
 */
class PluginButoMercury{
  /**
   * Widget to clear cache.
   */
  public function widget_clear_cache(){
    $element = array();
    if(wfUser::hasRole('webmaster') || wfUser::hasRole('webadmin')){
      wfFilesystem::clearCache();
      $element[] = wfDocument::createHtmlElement('p', 'Cache is now empty.');
    }else{
      $element[] = wfDocument::createHtmlElement('p', 'You have not proper role to do this.');
    }
    wfDocument::renderElement($element);
  }
}