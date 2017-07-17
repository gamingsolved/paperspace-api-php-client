# MachineCreationParams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**region** | **string** | Name of the region | 
**machine_type** | **string** |  | 
**size** | **int** | Storage size for the machine in GB | 
**billing_type** | **string** | Either &#39;monthly&#39; or &#39;hourly&#39; billing | 
**machine_name** | **string** | A memorable name for this machine | 
**template_id** | **string** | Template id of the template to use for creating this machine | 
**network_id** | **string** | If creating on a specific network, specify its id | [optional] 
**team_id** | **string** | If creating the machine for a team, specify the team id | [optional] 
**user_id** | **string** | If assigning to an existing user other than yourself, specify the user id | [optional] 
**email** | **string** | If creating a new user for this machine, specify their email address | [optional] 
**password** | **string** | If creating a new user, specify their password | [optional] 
**first_name** | **string** | If creating a new user, specify their first name | [optional] 
**last_name** | **string** | If creating a new user, specify their last name | [optional] 
**notification_email** | **string** | Send a notification to this email address when complete | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


