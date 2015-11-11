<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
fields:
  title:
    label: Title
    type:  text
    width: 1/2
  author:
    label: Author
    type:  text
    width: 1/2
  description:
    label: Description
    type:  textarea
    width: 1/2
  copyright:
    label: Copyright
    type:  textarea
    width: 1/2
  keywords:
    label: Keywords
    type:  tags
  phone:
    label: 24/7 Service Number
    type:  text
  twitter:
    label: Twitter
    type:  text
    width: 1/4
    help: @username
  facebook:
    label: Facebook
    type:  text
    width: 1/4
  linkedin:
    label: linkedIn
    type:  text
    width: 1/4
  youtube:
    label: Youtube
    type:  text
    width: 1/4