import json
import boto3

led_topic = "r0640239/led"
temp = 22.00

client = boto3.client('iot-data', region_name='us-west-2')

def lambda_handler(event, context):
    if float(event["temperature"]) > temp:
        client.publish(topic=led_topic, qos=1, payload="1") 
    else:
        client.publish(topic=led_topic, qos=1, payload="0") 
    return {
        'statusCode': 200,
        'body': json.dumps('control LED')
    }
