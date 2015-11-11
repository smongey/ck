<?php if(!defined('KIRBY')) exit ?>

title: Person
pages: false
files:
  sortable: true
  type: image
  width: 800
  height: 800
fields:
  title:
    label: Name
    type:  text
  role:ful
    label: Abbreviated Role
    type:  text
    width: 1/2
  fullrole:
    label: Full Role
    type:  text
    width: 1/2
  bio:
    label: Bio
    type:  textarea
  profile:
    label: Profile
    type:  select
    options: images
    help: After uploading the file on the left, select your image here. Image must be 600 x 600 pixels