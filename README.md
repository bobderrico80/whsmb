This is a simple web page that allows students to practice along with their parts for their upcoming marching band season.

NOTE: audio files and PDFs are not included in this repository.  If you wish to fork this repository, follow the
directions below.

All audio parts should be stored in the audio/ folder.  Parts are named by three separate strings:
	Part options: 'only', 'minus', 'full'
		'only' plays only the selected part
		'minus' plays all parts except the selected part
		'full' plays all parts
	Part number: '01', '02', etc...
		Each part number represents an instrument, for example '01' is flute, '02' is clarinet, etc.
	Click track on or off:
		'c' if on
		an empty string if off
		
PDFs numbered by part number should be stored in the pdf/ folder.  This allows students to view/print the selected part.

After selections are made, an AJAX call is made to PHP script processes the selection, and chooses the 
correct file by concatenating the three strings, appending a file extension (.mp3, .ogg, .pdf), and 
returning an HTML <audio> tag and a link to the PDF.
