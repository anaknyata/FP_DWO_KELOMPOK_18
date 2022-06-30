<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/fp_dwo?user=root&password=" catalogUri="/WEB-INF/queries/salesquotafact.xml">

select NON EMPTY {[Measures].[SalesYTD],[Measures].[SalesLastYear]} ON COLUMNS,
NON EMPTY {([Territory].[AllTerritories],[SalesOrder].[AllSalesOrders],[FirstName].[AllFirstNames])} ON ROWS
from [salesquotafact]


</jp:mondrianQuery>





<c:set var="title01" scope="session">SalesQuotaFact Mondrian OLAP</c:set>
