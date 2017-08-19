[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/BingSpeech/functions?utm_source=RapidAPIGitHub_BingSpeechFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# BingSpeech Package
Microsoft’s Speech to Text and Text to Speech cloud offerings help you put speech to work in your application. Microsoft's Speech APIs can transcribe speech to text and can generate speech from text. These APIs enable you to create powerful experiences that delight your users.
* Domain: microsoft.com
* Credentials: subscriptionKey, accessToken

## How to get credentials: 
1. Sign in [portal.azure.com](https://portal.azure.com).
2. Add new API subscription.


## Custom datatypes:
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]```
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

## BingSpeech.getAccessToken
Exchange you subscriptionKey to accessToken.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.

## BingSpeech.speechRecognition
There are three modes of recognition: interactive, conversation, and dictation. The recognition mode adjusts speech recognition based on how the users are likely to speak. Choose the appropriate recognition mode for your application.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your accessToken.
| mode       | Select     | Must be: ```Interactive```, ```Conversation```, ```Dictation```
| language   | String     | The value of the language query parameter must be one of the languages that are supported by the service, as specified in BCP 47 format.
| file       | File       | Actual wave file.

## BingSpeech.textToSpeach
Text to speech conversion in a variety of different voices and languages.

| Field       | Type       | Description
|-------------|------------|----------
| accessToken | credentials| Your accessToken.
| outputFormat| Select     | Must be: ```ssml-16khz-16bit-mono-tts```,```raw-16khz-16bit-mono-pcm```,```audio-16khz-16kbps-mono-siren```,```riff-16khz-16kbps-mono-siren```,```riff-16khz-16bit-mono-pcm```,```audio-16khz-128kbitrate-mono-mp3```,```audio-16khz-64kbitrate-mono-mp3```,```audio-16khz-32kbitrate-mono-mp3```
| locale      | String     | The value of the language query parameter must be one of the languages that are supported by the service, as specified in BCP 47 format.
| gender      | Select     | Must be: male, female
| serviceName | String     | Service name mapping
| text        | String     | Conversion text

[Read for more information](https://docs.microsoft.com/en-us/azure/cognitive-services/speech/api-reference-rest/bingvoiceoutput)
