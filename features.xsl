<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
  
<body>
  <h1 style="text-align:center">Happy Stay</h1>
  <h2 style="text-align:center" >Features</h2>
  <table border="5">
    <tr bgcolor="#6ddccf">
      <th style="text-align:center">PACKAGE</th>
      <th style="text-align:center">ACTIVITY</th>
      <th style="text-align:center">OCCUPENCY</th>
      
    </tr>
    <xsl:for-each select="pack/city" >
    <tr bgcolor="#ffcb91" >
      <td><xsl:value-of select="package"/></td>
      <td><xsl:value-of select="activity"/></td>
      <td><xsl:value-of select="occupency"/></td>
    

    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>