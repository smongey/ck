<?php if(!defined('KIRBY')) exit ?>

title: Entry
pages: false
files:
  sortable: true
  type: image
fields:
  title:
    label: Title
    type:  text
    width: 1/2
  date:
    label: Date
    type:  date
    width: 1/2
    format: MM/DD/YYYY
  image:
    label: image
    type:  select
    options: images
    width: 1/2
  video:
    label: Video
    type:  text
    width: 1/2
    help: This is the link to the video on youtube or vimeo.<br/>e.g. https://vimeo.com/143099296
  text:
    label: Text
    type:  textarea