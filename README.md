# DMS-to-lat-lon-converter

Convert for exmaple coorinates in DMS (Degree Minutes Seconds) like:
52°05'48''N 015°32'06''E
to LON, LAT, like: 15.535, 52.096667

This simple script reads CVS file with coordinates in new line
and print coordinates in the format which you can use for example in GeoJSON file.

# dms.csv - example:
52°05'48''N 015°32'06''E  
52°08'38''N 015°38'18''E  
52°13'11''N 015°53'26''E  
52°13'52''N 015°58'52''E  
52°11'08''N 016°01'16''E  
52°09'08''N 015°57'27''E  
52°04'09''N 015°41'03''E  
52°03'05''N 015°34'45''E  
52°05'48''N 015°32'06''E

# Result:
[15.535, 52.096667], [15.638333, 52.143889], [15.890556, 52.219722], [15.981111, 52.231111], [16.021111, 52.185556], [15.9575, 52.152222], [15.684167, 52.069167], [15.579167, 52.051389], [15.535, 52.096667],
