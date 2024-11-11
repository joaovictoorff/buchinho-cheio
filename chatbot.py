from gemini import GeminiAPI

# Configure sua chave de API
gemini.api_key = "AIzaSyBTzNVR3i797x0_l_lOu_gBXFHgYzCIwrc"

def responder_pergunta(mensagem):
    response = gemini.ChatCompletion.create(
        model="gpt-3.5-turbo",
        messages=[{"role": "user", "content": mensagem}]
    )
    resposta = response.choices[0].message['content'].strip()
    return resposta

if __name__ == "__main__":
    print("Digite 'sair' para encerrar a conversa.")
    while True:
        mensagem = input("Você: ")
        if mensagem.lower() == "sair":
            print("Encerrando a conversa.")
            break
        resposta = responder_pergunta(mensagem)
        print("IA:", resposta)