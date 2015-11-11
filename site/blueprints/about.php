<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: false
fields:
	title:
		label: Title
		type:  text
	sections: 
		label: Sections
		type: structure
		entry: >
			<div style="overflow: auto;">
				<div style="float:left; width:30%;margin-bottom:20px;">
					<strong>{{title}}</strong>
				</div>
				<div style="float:right; width:70%;margin-bottom:20px;">
					{{description}}
				</div>
			</div>
		fields: 
			title:
				label: Title
				type:  text
			description:
				label: Description
				type:  textarea