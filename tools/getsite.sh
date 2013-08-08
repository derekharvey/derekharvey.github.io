#!/bin/bash
 wget \
     --recursive \
     --no-clobber \
     --page-requisites \
     --html-extension \
     --convert-links \
     --restrict-file-names=windows \
     --domains derekharvey.co.uk \
     --no-parent \
	http://derekharvey.co.uk
