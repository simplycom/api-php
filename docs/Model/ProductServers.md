# ProductServers

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nameservers** | **string[]** | Simply.com nameservers currently assigned to the domain in our system. Does not query the registry. |
**webserver** | [**\SimplyCom\Model\WebServer**](WebServer.md) | Web server information (only present for hosting products) | [optional]
**ftpserver** | [**\SimplyCom\Model\FtpServer**](FtpServer.md) | FTP server information (only present for hosting products) | [optional]
**sshserver** | [**\SimplyCom\Model\SshServer**](SshServer.md) | SSH server information (only present for hosting products). Add public-key manually through Simply.com Controlpanel. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
