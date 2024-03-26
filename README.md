# Simple ChatGPT-3.5 Chat App Setup Guide

Welcome to the setup guide for your very own ChatGPT-3.5 chat application! This guide will walk you through the process of setting up a local ChatGPT-3.5 chat application that runs on your computer. By hosting it locally using Laragon, you save on cloud hosting costs and enjoy a seamless setup experience. Get ready to dive into AI-powered conversations right from your machine. All you need is an OpenAI API key and Laragon installed on your Windows computer.

## Step 1: Obtain Your OpenAI API Key

To communicate with the ChatGPT-3.5 model, you need an API key from OpenAI:

1. Go to [OpenAI](https://openai.com/) and sign up or log in.
2. Access your API keys by navigating to [your API dashboard](https://platform.openai.com/account/api-keys).
3. Generate a new API key and save it securely.

## Step 2: Download and Install Laragon

Set up a local server environment with Laragon:

1. Download Laragon from the [official website](https://laragon.org/download/index.html). Choose either Full or Lite version.
2. Install Laragon by executing the downloaded file and following the setup instructions.

## Step 3: Download the Chat Application Files

1. Visit the GitHub repository: [simplechat](https://github.com/jjsarf/simplechat).
2. Manually download the files by clicking on `client.html` and `server.php`, then clicking "Raw", right-clicking the page, and choosing "Save as..." to save them.

## Step 4: Setup the Application in Laragon

1. Navigate to Laragon's `www` directory, typically located at `C:\laragon\www`.
2. Delete any files in the `www` directory if you want your chat application to be accessed directly via `http://localhost/`.
3. Move the downloaded `client.html` and `server.php` files into the `www` directory.
4. Open `server.php` with a text editor. Look for the line that says `define('API_KEY', 'sk-YOUR-OPENAI-KEY');`. Replace `'sk-YOUR-OPENAI-KEY'` with your actual OpenAI API key. For example, if your API key is `abc123`, the line should look like this: `define('API_KEY', 'abc123');`

## Step 5: Run Your Chat Application

1. Open Laragon and click "Start All" to start the Apache and MySQL services.
2. Open a web browser and go to `http://localhost/client.html`.
3. Enjoy chatting with ChatGPT-3.5!

By following these steps, you'll have your local ChatGPT-3.5 chat application up and running. Happy chatting!
