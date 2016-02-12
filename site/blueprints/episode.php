<?php if(!defined('KIRBY')) exit ?>

title: Episode
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
    format: MM/DD/YYYY
  vimeo:
    label: Vimeo ID
    type: text
  summary:
    label: Summary
    type:  textarea
  transcript:
    label: Transcript
    type:  textarea
  advertisements:
    label: Episode Advertisements
    type: textarea
