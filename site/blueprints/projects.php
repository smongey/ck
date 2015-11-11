<?php if(!defined('KIRBY')) exit ?>

title: Projects
pages:
  template: project
files: false
fields:
	title:
		label: Title
		type:  text
	featuredtext:
		label: Featured Text
		type:  textarea
	featured:
		label: Featured Projects
		type: multiselect
		options: query
		query:
			page: projects
			fetch: children
	filtertext:
		label: Full Archive Text
		type:  textarea