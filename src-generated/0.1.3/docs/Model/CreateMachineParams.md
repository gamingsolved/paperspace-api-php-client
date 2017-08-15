# CreateMachineParams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**region** | [**\Gamingsolved\Paperspace\Api\Client\Version0_1_3\Model\Region**](Region.md) |  | 
**machineType** | **string** |  | 
**size** | **int** | Storage size for the machine in GB | 
**billingType** | **string** | Either &#39;monthly&#39; or &#39;hourly&#39; billing | 
**machineName** | **string** | A memorable name for this machine | 
**templateId** | **string** | Template id of the template to use for creating this machine | 
**assignPublicIp** | **bool** | Assign a new public ip address on machine creation | [optional] 
**networkId** | **string** | If creating on a specific network, specify its id | [optional] 
**teamId** | **string** | If creating the machine for a team, specify the team id | [optional] 
**userId** | **string** | If assigning to an existing user other than yourself, specify the user id | [optional] 
**email** | **string** | If creating a new user for this machine, specify their email address | [optional] 
**password** | **string** | If creating a new user, specify their password | [optional] 
**firstName** | **string** | If creating a new user, specify their first name | [optional] 
**lastName** | **string** | If creating a new user, specify their last name | [optional] 
**notificationEmail** | **string** | Send a notification to this email address when complete | [optional] 
**scriptId** | **string** | The script id of a script to be run on startup | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


