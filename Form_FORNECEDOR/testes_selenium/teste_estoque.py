from selenium import webdriver
from selenium.webdriver.common.by import By
import time

# Inicia o servicção do ChromeDriver
servico = webdriver.ChromeService(executable_path="C:/Users/kaio_mazza/Downloads/chromedriver-win64/chromedriver-win64/chromedriver.exe")
driver = webdriver.Chrome(service=servico)

try:
    # 1. Abre a página do app de estoque
    driver.get('file:///C:/xampp/htdocs/aulas_php/Form_FORNECEDOR/Paginas/FormularioPeca_CSS.html')

    # 2. Encontra os campos de input e preenche com os dados do produto
    campo_tipo_peca = driver.find_element(By.ID, 'CB_TipoPeca')
    campo_descricao = driver.find_element(By.ID, 'Entry_Descricao')
    campo_quantidade = driver.find_element(By.ID, 'Entry_Quantidade')
    campo_lote = driver.find_element(By.ID, 'Entry_Lote')
    campo_valor = driver.find_element(By.ID, 'Entry_Valor')
    campo_fornecedor = driver.find_element(By.ID, 'CB_Fornecedor')

    botao_cadastrar = driver.find_element(By.ID, 'Button_Cadastrar')

    campo_tipo_peca.send_keys("Motor")
    campo_descricao.send_keys("Motor de Arranque")
    campo_quantidade.send_keys("5000")
    campo_lote.send_keys("KTX/212")
    campo_valor.send_keys("250")
    campo_fornecedor.send_keys("Oxiii")

    # 3. Clica no botão para adicionar
    botao_cadastrar.click()
    time.sleep(2) # Pausa para a pagina atualizar
    # 4. Validação: Verifica se o novo produto existe na tabela
    tabela = driver.find_element(By.ID, 'table')

    if "Motor" in tabela.text and "Motor de Arranque" in tabela.text and "5000" in tabela.text and "KTX/212" in tabela.text and "250" in tabela.text and "Oxiii" in tabela.text:
        print("Teste de cadastro de produto: SUCESSO!")
    else:
        print("Teste de cadastro de produto: FALHA!")

finally:
    # Fecha o navegador
    driver.quit()