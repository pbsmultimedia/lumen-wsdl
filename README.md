# lumen-wsdl
lumen wsdl playground  

with the wsdl server in non wsdl mode this request works:  

```
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="http://service.domain">
	<soapenv:Body>
		<ser:test>
			<arg>
				Hello World!
			</arg>
		</ser:test>
	</soapenv:Body>
</soapenv:Envelope>
```
