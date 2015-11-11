<?php if(!defined('KIRBY')) exit ?>

title: Expertise
pages: false
files: true
fields:
	title:
		label: Title
		type:  text
	sections: 
		label: Sections
		type: structure
		entry: >
			<div style="overflow: auto;">
				<div style="float:left; width:50%;margin-bottom:20px;">
					<strong>{{title}}</strong>
				</div>
				<div style="float:right; width:50%;margin-bottom:20px;">
					{{description}}
				</div>
				<div style="float:left; width:100%; text-align: center;">
					<img src="{{photo}}" width="100%">
				</div>
			</div>
		fields: 
			title:
				label: Title
				type:  text
			description:
				label: Description
				type:  textarea
			photo:
				label: Photo
				type:  select
				options: query
				query:
					fetch: files
					value: '{{url}}'
					text: '{{filename}}'