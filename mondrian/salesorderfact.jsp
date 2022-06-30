<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/fp_dwo?user=root&password=" catalogUri="/WEB-INF/queries/salesorderfact.xml">

select  NON EMPTY {[Measures].[OrderQty],[Measures].[LineTotal]} ON COLUMNS,
NON EMPTY {([Territory].[AllTerritories],[Time].[AllTimes],[Product].[AllProducts])} ON ROWS
from [salesorderfact]


</jp:mondrianQuery>





<c:set var="title01" scope="session">SalesOrderFact Mondrian OLAP</c:set>
