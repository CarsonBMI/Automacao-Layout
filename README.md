# Automação Layout

### Utilização

O código foi criado com o propósito de automatizar o processo de selecionar o layout criado pela empresa de forma automática ao acessar um painel que tenha essa funcionalidade ativada.

- **Etapa 1**
Com a aplicação grid aberta, ir na opção do menu **"Salvar Consulta"** e habilitar somente a opção **"Selecionar Colunas"**. Após isso, habilitar somente o nível **"Público"** e selecionar a opção **"Simplificado"** do layout.

- **Etapa 2**
Inserir o comando no evento **"OnScriptInit"**.

- **Etapa 3**
Em "Barra de Ferramentas" ajustar o nome do label do botão **"Salvar Consulta"** para **"Layout"**.

- **Etapa 4**
Executar aplicação, ajustar as colunas como desejado, ir no botão **"Layout"** e criar um novo layout com **"Nível = Público"** e nome igual ao que foi gravado no banco de dados.

### Observação
- O nome do novo layout automático deve seguir o nome da empresa definido na tabela **"ocean_dat.dim_empresa"** coluna **"sperfil_layout_grid"**.
- Para layouts que não seguem esse nome, podem ser aplicados de maneira manual.
