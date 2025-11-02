<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>API Config - HG CHEATS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="assets/style.css" />
  <style>
    /* Estilos customizados para melhorar o tema */
    .btn-gradient {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      transition: all 0.3s ease;
    }
    .btn-gradient:hover {
      background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    .text-gradient {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .card-hover {
      transition: all 0.3s ease;
    }
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    .animate-fadeInUp {
      animation: fadeInUp 0.6s ease-out;
    }
    .animate-slideDown {
      animation: slideDown 0.6s ease-out;
    }
    .animate-fadeInLeft {
      animation: fadeInLeft 0.6s ease-out;
    }
    .stagger-children > * {
      animation-delay: calc(var(--stagger-delay, 0) * 0.1s);
    }
    
    /* Animações para modais */
    .modal-show {
      opacity: 1 !important;
      transform: scale(1) !important;
    }
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    @keyframes fadeInLeft {
      from {
        opacity: 0;
        transform: translateX(-30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-400 { animation-delay: 0.4s; }
  </style>
</head>
<body class="bg-[#0f172a] text-white min-h-screen">

<div class="flex min-h-screen">
  
<!-- Botão do menu hambúrguer para mobile -->
<button id="sidebarToggle" class="fixed top-4 left-4 z-50 md:hidden bg-[#1e293b] text-white p-3 rounded-lg shadow-lg border border-slate-700/50 hover:bg-[#334155] transition-all duration-200">
  <i class="fas fa-bars text-lg"></i>
</button>

<!-- Overlay para mobile -->
<div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden md:hidden"></div>

<div id="sidebar" class="bg-[#1e293b] text-white w-64 pt-1 flex-shrink-0 h-screen fixed top-0 left-0 z-40 transition-transform duration-200 ease-in-out md:translate-x-0 -translate-x-full md:flex flex-col animate-fadeInLeft border-r border-slate-700/50 overflow-y-auto">
    
  <!-- Logo -->
  <div class="flex items-center justify-center h-20 px-6 border-b border-slate-600/30">
    <div class="text-2xl font-bold tracking-wider text-white">
      <span class="text-indigo-400">HG</span>
      <span class="text-slate-300 ml-1">CHEATS</span>
    </div>
  </div>

  <!-- Menu -->
  <nav class="sidebar-nav flex flex-col flex-grow px-4 py-6 space-y-1">
   
    <a href="dashboard" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-[#334155] text-slate-300 hover:text-white">
      <i class="fa-solid fa-gauge text-indigo-400"></i>
      <span class="font-medium">Dashboard</span>
    </a>
   
    
    <a href="usuarios" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-[#334155] text-slate-300 hover:text-white">
      <i class="fa-solid fa-users text-blue-400"></i>
      <span class="font-medium">Keys</span>
    </a>
    
    <a href="logins_tempo_real" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-[#334155] text-slate-300 hover:text-white">
      <i class="fa-solid fa-circle-dot text-emerald-400 pulse-dot"></i>
      <span class="font-medium">Logins Online</span>
    </a>
     
    <a href="gerenciar_logins" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-[#334155] text-slate-300 hover:text-white">
      <i class="fa-solid fa-sign-out-alt text-red-400"></i>
      <span class="font-medium">Gerenciar Logins</span>
    </a>
    
       <a href="revendedores" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-[#334155] text-slate-300 hover:text-white">
      <i class="fa-solid fa-user-friends text-pink-400"></i>
      <span class="font-medium">Revendedores</span>
    </a>
        
    <a href="produto" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-[#334155] text-slate-300 hover:text-white">
      <i class="fa-solid fa-tags text-orange-400"></i>
      <span class="font-medium">Produtos</span>
    </a>
    
        <a href="api_config" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-gradient-to-r from-cyan-600 to-cyan-700 text-white shadow-lg border border-cyan-500/50">
      <i class="fa-solid fa-key text-cyan-400"></i>
      <span class="font-medium">API Config</span>
    </a>
    
        
        <a href="creditos" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-[#334155] text-slate-300 hover:text-white">
      <i class="fa-solid fa-coins text-yellow-400"></i>
      <span class="font-medium">Créditos</span>
    </a>
      </nav>
  
  <!-- Informações do Usuário -->
    <div class="sidebar-user-info">
    <div class="user-info-card">
      <div class="user-name">
        <i class="fa-solid fa-user text-slate-400"></i>
        cuban04      </div>
      <div class="user-role seller">
        <i class="fa-solid fa-handshake text-xs"></i>
        Vendedor      </div>
      <!-- Créditos com estilo verde mais bonito e legível -->
      <div class="user-credits bg-gradient-to-r from-emerald-500/25 to-green-500/25 border border-emerald-400/40 rounded-lg p-2.5 mt-2 backdrop-blur-sm shadow-md hover:shadow-lg transition-all duration-300 hover:from-emerald-500/30 hover:to-green-500/30">
        <div class="flex items-center justify-center gap-2">
          <i class="fa-solid fa-coins text-emerald-300 text-base animate-pulse drop-shadow-sm"></i>
          <span class="text-emerald-100 font-bold text-base tracking-wide drop-shadow-sm">R$ 0,00</span>
        </div>
      </div>
      
        <a href="logout" class="sidebar-logout flex items-center justify-center gap-1 px-2 py-1.5 mt-1.5 rounded-md transition-all duration-200 bg-red-500/10 border border-red-500/30 text-red-400 hover:bg-red-500/20 hover:text-red-300 hover:border-red-400/50">
      <i class="fa-solid fa-right-from-bracket text-xs"></i>
      <span class="font-medium text-xs">Sair</span>
    </a>
    </div>
  </div>
  </div>

<script>
// Script para controle do sidebar mobile
document.addEventListener('DOMContentLoaded', function() {
  const sidebarToggle = document.getElementById('sidebarToggle');
  const sidebar = document.getElementById('sidebar');
  const sidebarOverlay = document.getElementById('sidebarOverlay');
  
  // Função para abrir sidebar
  function openSidebar() {
    sidebar.classList.remove('-translate-x-full');
    sidebarOverlay.classList.remove('hidden');
    document.body.style.overflow = 'hidden'; // Prevenir scroll do body
  }
  
  // Função para fechar sidebar
  function closeSidebar() {
    sidebar.classList.add('-translate-x-full');
    sidebarOverlay.classList.add('hidden');
    document.body.style.overflow = ''; // Restaurar scroll do body
  }
  
  // Event listener para o botão hambúrguer
  if (sidebarToggle) {
    sidebarToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      if (sidebar.classList.contains('-translate-x-full')) {
        openSidebar();
      } else {
        closeSidebar();
      }
    });
  }
  
  // Event listener para o overlay
  if (sidebarOverlay) {
    sidebarOverlay.addEventListener('click', closeSidebar);
  }
  
  // Fechar sidebar ao clicar em um link (mobile)
  const sidebarLinks = sidebar.querySelectorAll('.sidebar-item');
  sidebarLinks.forEach(link => {
    link.addEventListener('click', function() {
      // Só fechar em mobile
      if (window.innerWidth < 768) {
        closeSidebar();
      }
    });
  });
  
  // Fechar sidebar ao redimensionar para desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 768) {
      closeSidebar();
    }
  });
  
  // Fechar sidebar com tecla ESC
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && !sidebar.classList.contains('-translate-x-full')) {
      closeSidebar();
    }
  });
});

// Função para voltar ao painel de administrador
function voltarParaAdmin() {
  // Usar o modal de confirmação
  if (typeof window.mostrarConfirmacao === 'function') {
    window.mostrarConfirmacao(
      'Voltar para o Painel de Administrador',
      'Deseja realmente voltar para o painel de administrador?',
      () => {
        // Executar a requisição
        fetch("scripts/voltar_admin.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({}),
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Usar modal de sucesso com a mensagem "Retornando ao painel de administrador"
            window.mostrarSucesso("Retornando ao painel de administrador");
            setTimeout(() => {
              window.location.href = "dashboard.php";
            }, 1500);
          } else {
            window.mostrarErro(data.message || "Erro ao voltar para o painel de administrador");
          }
        })
        .catch(error => {
          console.error("Erro:", error);
          window.mostrarErro("Erro de conexão");
        });
      }
    );
  } else {
    // Fallback se o modal não estiver disponível
    if (confirm('Deseja realmente voltar para o painel de administrador?')) {
      fetch("scripts/voltar_admin.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({}),
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert("Retornando ao painel de administrador");
          window.location.href = "dashboard.php";
        } else {
          alert(data.message || "Erro ao voltar para o painel de administrador");
        }
      })
      .catch(error => {
        console.error("Erro:", error);
        alert("Erro de conexão");
      });
    }
  }
}
</script>


  <div class="flex flex-col flex-1">
    <main class="p-6 flex-1 overflow-y-auto">

      <!-- Título API Config no topo -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4 animate-fadeInUp">
          <div>
            <h2 class="text-lg font-semibold flex items-center gap-2">
              <i class="fas fa-cog text-blue-400"></i>
              Configuração da API
            </h2>
            <p class="text-sm text-slate-400 mt-1">Gerencie suas API keys e links temporários para reset de HWID</p>
          </div>
        </div>

      <!-- Cards de Ações -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 stagger-children">
        <!-- Card API Keys -->
        <div class="bg-[#1e293b] p-6 rounded-xl border border-slate-700/50 card-hover animate-fadeInUp" style="--stagger-delay: 1">
          <div class="flex items-center mb-4">
            <div class="bg-cyan-500/20 p-3 rounded-full mr-4">
              <i class="fas fa-key text-cyan-400 text-xl"></i>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-white">API Keys</h3>
              <p class="text-slate-400 text-sm">Gerencie suas chaves de API para bots</p>
            </div>
          </div>
          <button onclick="openCreateApiModal()" class="w-full bg-gradient-to-r from-cyan-600 to-cyan-700 text-white px-4 py-2 rounded-lg hover:from-cyan-700 hover:to-cyan-800 transition-all duration-200 font-medium">
            <i class="fas fa-plus mr-2"></i>Criar Nova API Key
          </button>
        </div>

        <!-- Card Links Temporários -->
        <div class="bg-[#1e293b] p-6 rounded-xl border border-slate-700/50 card-hover animate-fadeInUp" style="--stagger-delay: 2">
          <div class="flex items-center mb-4">
            <div class="bg-purple-500/20 p-3 rounded-full mr-4">
              <i class="fas fa-link text-purple-400 text-xl"></i>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-white">Links de Reset</h3>
              <p class="text-slate-400 text-sm">Crie links temporários ou permanentes</p>
            </div>
          </div>
          <button onclick="openCreateTempLinkModal()" class="w-full bg-gradient-to-r from-purple-600 to-purple-700 text-white px-4 py-2 rounded-lg hover:from-purple-700 hover:to-purple-800 transition-all duration-200 font-medium">
            <i class="fas fa-plus mr-2"></i>Criar Link de Reset
          </button>
        </div>
      </div>

      <!-- Tabs -->
      <div class="bg-[#1e293b] rounded-xl border border-slate-700/50 overflow-hidden animate-fadeInUp delay-200">
        <div class="border-b border-slate-700/50">
          <nav class="flex space-x-8 px-6">
            <button onclick="switchTab('api-keys')" id="tab-api-keys" class="tab-button active py-4 px-2 border-b-2 border-cyan-500 text-cyan-400 font-medium text-sm">
              <i class="fas fa-key mr-2"></i>Minhas API Keys
            </button>
            <button onclick="switchTab('temp-links')" id="tab-temp-links" class="tab-button py-4 px-2 border-b-2 border-transparent text-slate-400 hover:text-slate-300 font-medium text-sm">
              <i class="fas fa-link mr-2"></i>Links de Reset
            </button>
            <button onclick="switchTab('documentation')" id="tab-documentation" class="tab-button py-4 px-2 border-b-2 border-transparent text-slate-400 hover:text-slate-300 font-medium text-sm">
              <i class="fas fa-book mr-2"></i>Documentação
            </button>
          </nav>
        </div>

        <!-- Conteúdo das Tabs -->
        <div class="p-6">
          <!-- Tab API Keys -->
          <div id="content-api-keys" class="tab-content">
            <div id="api-keys-list" class="space-y-4">
              <!-- Carregado via JavaScript -->
            </div>
          </div>

          <!-- Tab Links Temporários -->
          <div id="content-temp-links" class="tab-content hidden">
            <div id="temp-links-list" class="space-y-4">
              <!-- Carregado via JavaScript -->
            </div>
          </div>

          <!-- Tab Documentação -->
          <div id="content-documentation" class="tab-content hidden">
            <div class="prose max-w-none text-slate-300">
              <h3 class="text-lg font-semibold mb-4 text-white">Como usar a API de Reset</h3>
              
              <div class="bg-slate-800/50 rounded-lg p-4 mb-6 border border-slate-700/50">
                <h4 class="font-semibold mb-2 text-white">Endpoint:</h4>
                <code class="bg-slate-900 px-2 py-1 rounded text-sm text-cyan-400">POST /api/reset.php</code>
              </div>

              <div class="bg-slate-800/50 rounded-lg p-4 mb-6 border border-slate-700/50">
                <h4 class="font-semibold mb-2 text-white">Headers:</h4>
                <pre class="bg-slate-900 p-3 rounded text-sm overflow-x-auto text-cyan-400"><code>Content-Type: application/json
X-API-Key: sua_api_key_aqui</code></pre>
              </div>

              <div class="bg-slate-800/50 rounded-lg p-4 mb-6 border border-slate-700/50">
                <h4 class="font-semibold mb-2 text-white">Body (JSON):</h4>
                <pre class="bg-slate-900 p-3 rounded text-sm overflow-x-auto text-cyan-400"><code>{
  "username": "nome_do_usuario"
}</code></pre>
              </div>

              <div class="bg-slate-800/50 rounded-lg p-4 mb-6 border border-slate-700/50">
                <h4 class="font-semibold mb-2 text-white">Exemplo de uso (cURL):</h4>
                <pre class="bg-slate-900 p-3 rounded text-sm overflow-x-auto text-cyan-400"><code>curl -X POST https://hgcheats.online/api/reset.php \
  -H "Content-Type: application/json" \
  -H "X-API-Key: sua_api_key_aqui" \
  -d '{"username": "nome_do_usuario"}'</code></pre>
              </div>

              <div class="bg-blue-500/20 border border-blue-500/30 rounded-lg p-4">
                <h4 class="font-semibold text-blue-300 mb-2">Importante:</h4>
                <ul class="text-blue-200 text-sm space-y-1">
                  <li>• Você só pode resetar usuários que pertencem a você</li>
                  <li>• A API key deve estar ativa</li>
                  <li>• Todos os usos são registrados em logs</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

    <!-- Modal Criar API Key -->
    <div id="createApiModal" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50">
      <div class="bg-gradient-to-br from-slate-800 to-slate-900 p-8 rounded-2xl w-full max-w-md relative text-white shadow-2xl transform transition-all duration-500 scale-95 opacity-0 border border-slate-600/50" id="createApiModalContent">
        
        <!-- Botão fechar -->
        <button onclick="closeCreateApiModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white transition-colors">
          <i class="fas fa-times text-xl"></i>
        </button>
        
        <div class="space-y-6">
          <!-- Cabeçalho -->
          <div class="text-center">
            <div class="w-16 h-16 bg-cyan-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-key text-cyan-400 text-2xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-white mb-2">Criar API Key</h2>
            <p class="text-slate-400 text-sm">Crie uma nova chave de API para bots e aplicações</p>
          </div>
          
          <!-- Formulário -->
          <form id="createApiForm" onsubmit="submitCreateApi(event)">
            <div class="space-y-4">
              <!-- Nome da API -->
              <div>
                <label class="block text-sm font-medium text-slate-300 mb-2">
                  <i class="fas fa-tag mr-2"></i>Nome da API
                </label>
                <input type="text" id="apiName" name="api_name" required 
                       class="w-full px-4 py-3 rounded-lg bg-slate-700 text-white border border-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-200"
                       placeholder="Ex: Bot Discord, Sistema Automático...">
                <p class="text-xs text-slate-400 mt-1">Escolha um nome descritivo para identificar onde será usada</p>
              </div>
            </div>
            
            <!-- Botões -->
            <div class="flex gap-3 mt-8">
              <button type="button" onclick="closeCreateApiModal()" 
                      class="flex-1 bg-slate-600 hover:bg-slate-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center justify-center gap-2">
                <i class="fas fa-times"></i> Cancelar
              </button>
              <button type="submit" 
                      class="flex-1 bg-gradient-to-r from-cyan-600 to-cyan-700 hover:from-cyan-700 hover:to-cyan-800 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center justify-center gap-2">
                <i class="fas fa-key"></i> Criar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Criar Link Temporário -->
    <div id="createTempLinkModal" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50">
      <div class="bg-gradient-to-br from-slate-800 to-slate-900 p-8 rounded-2xl w-full max-w-md relative text-white shadow-2xl transform transition-all duration-500 scale-95 opacity-0 border border-slate-600/50" id="createTempLinkModalContent">
        
        <!-- Botão fechar -->
        <button onclick="closeTempLinkModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white transition-colors">
          <i class="fas fa-times text-xl"></i>
        </button>
        
        <div class="space-y-6">
          <!-- Cabeçalho -->
          <div class="text-center">
            <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-link text-purple-400 text-2xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-white mb-2">Criar Link de Reset</h2>
            <p class="text-slate-400 text-sm">Crie um link temporário ou permanente para reset</p>
          </div>
          
          <!-- Formulário -->
          <form id="createTempLinkForm" onsubmit="submitCreateTempLink(event)">
            <div class="space-y-4">
              <!-- Tipo de Link -->
              <div>
                <label class="block text-sm font-medium text-slate-300 mb-2">
                  <i class="fas fa-clock mr-2"></i>Tipo de Link
                </label>
                <select id="linkType" name="link_type" onchange="toggleExpirationField()" 
                        class="w-full px-4 py-3 rounded-lg bg-slate-700 text-white border border-slate-600 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200">
                  <option value="temporary">Temporário (com expiração)</option>
                  <option value="permanent">Permanente (sem expiração)</option>
                </select>
              </div>
              
              <!-- Tempo de Expiração -->
              <div id="expirationField">
                <label class="block text-sm font-medium text-slate-300 mb-2">
                  <i class="fas fa-hourglass-half mr-2"></i>Tempo de Expiração
                </label>
                <select id="expirationHours" name="expiration_hours" 
                        class="w-full px-4 py-3 rounded-lg bg-slate-700 text-white border border-slate-600 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200">
                  <option value="1">1 hora</option>
                  <option value="6">6 horas</option>
                  <option value="12">12 horas</option>
                  <option value="24" selected>24 horas</option>
                  <option value="48">48 horas</option>
                  <option value="72">72 horas</option>
                  <option value="168">7 dias</option>
                </select>
                <p class="text-xs text-slate-400 mt-1">O link expirará automaticamente após este período</p>
              </div>
            </div>
            
            <!-- Botões -->
            <div class="flex gap-3 mt-8">
              <button type="button" onclick="closeTempLinkModal()" 
                      class="flex-1 bg-slate-600 hover:bg-slate-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center justify-center gap-2">
                <i class="fas fa-times"></i> Cancelar
              </button>
              <button type="submit" 
                      class="flex-1 bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center justify-center gap-2">
                <i class="fas fa-link"></i> Criar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Mostrar API Key -->
    <div id="showApiKeyModal" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50">
      <div class="bg-gradient-to-br from-slate-800 to-slate-900 p-8 rounded-2xl w-full max-w-md relative text-white shadow-2xl transform transition-all duration-500 scale-95 opacity-0 border border-slate-600/50" id="showApiKeyModalContent">
        
        <!-- Botão fechar -->
        <button onclick="closeShowApiKeyModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white transition-colors">
          <i class="fas fa-times text-xl"></i>
        </button>
        
        <div class="space-y-6">
          <!-- Cabeçalho -->
          <div class="text-center">
            <div class="w-16 h-16 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-check text-green-400 text-2xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-white mb-2">API Key Criada!</h2>
            <p class="text-slate-400 text-sm">Sua nova API key foi criada com sucesso</p>
          </div>
          
          <!-- API Key -->
          <div class="bg-slate-800/50 rounded-lg p-4 border border-slate-700/50">
            <label class="block text-sm font-medium text-slate-300 mb-2">
              <i class="fas fa-key mr-2"></i>API Key:
            </label>
            <div class="flex items-center space-x-2">
              <input type="text" id="generatedApiKey" 
                     class="flex-1 px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white text-sm font-mono focus:outline-none focus:ring-2 focus:ring-green-500" 
                     readonly>
              <button onclick="copyApiKey()" 
                      class="px-3 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors">
                <i class="fas fa-copy"></i>
              </button>
            </div>
          </div>

          <!-- Aviso -->
          <div class="bg-amber-500/20 border border-amber-500/30 rounded-lg p-4">
            <h4 class="font-semibold text-amber-300 mb-2">
              <i class="fas fa-exclamation-triangle mr-2"></i>Importante:
            </h4>
            <p class="text-amber-200 text-sm">
              Copie e guarde esta API key em local seguro. Por motivos de segurança, ela não será exibida novamente.
            </p>
          </div>
          
          <!-- Botão -->
          <div class="flex justify-center">
            <button onclick="closeShowApiKeyModal()" 
                    class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center gap-2">
              <i class="fas fa-check"></i> Entendi
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Mostrar Link Temporário -->
    <div id="showTempLinkModal" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50">
      <div class="bg-gradient-to-br from-slate-800 to-slate-900 p-8 rounded-2xl w-full max-w-md relative text-white shadow-2xl transform transition-all duration-500 scale-95 opacity-0 border border-slate-600/50" id="showTempLinkModalContent">
        
        <!-- Botão fechar -->
        <button onclick="closeShowTempLinkModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white transition-colors">
          <i class="fas fa-times text-xl"></i>
        </button>
        
        <div class="space-y-6">
          <!-- Cabeçalho -->
          <div class="text-center">
            <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-link text-purple-400 text-2xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-white mb-2">Link Criado!</h2>
            <p class="text-slate-400 text-sm">Seu link de reset foi criado com sucesso</p>
          </div>
          
          <!-- Link -->
          <div class="bg-slate-800/50 rounded-lg p-4 border border-slate-700/50">
            <label class="block text-sm font-medium text-slate-300 mb-2">
              <i class="fas fa-link mr-2"></i>URL do Link:
            </label>
            <div class="flex items-center space-x-2">
              <input type="text" id="generatedTempLink" 
                     class="flex-1 px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white text-sm font-mono focus:outline-none focus:ring-2 focus:ring-purple-500" 
                     readonly>
              <button onclick="copyTempLinkFromModal()" 
                      class="px-3 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg transition-colors">
                <i class="fas fa-copy"></i>
              </button>
            </div>
          </div>

          <!-- Informações -->
          <div id="tempLinkInfo" class="bg-blue-500/20 border border-blue-500/30 rounded-lg p-4">
            <!-- Preenchido via JavaScript -->
          </div>
          
          <!-- Botão -->
          <div class="flex justify-center">
            <button onclick="closeShowTempLinkModal()" 
                    class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center gap-2">
              <i class="fas fa-check"></i> Entendi
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modais de Alerta para Ações de Usuário -->

<!-- Modal de Confirmação -->
<div id="modalConfirmacao" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-[70]">
  <div class="bg-gradient-to-br from-slate-800 to-slate-900 p-8 rounded-2xl w-full max-w-md relative text-white shadow-2xl transform transition-all duration-500 scale-95 opacity-0 border border-slate-600/50" id="modalConfirmacaoContent">
    
    <div class="text-center space-y-6">
      <!-- Ícone de pergunta -->
      <div class="flex justify-center">
        <div class="w-20 h-20 bg-yellow-500/20 rounded-full flex items-center justify-center relative">
          <div class="w-16 h-16 bg-yellow-500/30 rounded-full flex items-center justify-center animate-pulse">
            <i class="fas fa-question text-yellow-400 text-3xl"></i>
          </div>
          <div class="absolute inset-0 rounded-full border-2 border-yellow-400/50 animate-ping"></div>
        </div>
      </div>
      
      <!-- Título e mensagem -->
      <div>
        <h2 id="confirmacaoTitulo" class="text-xl font-bold text-white mb-3">
          Confirmar Ação
        </h2>
        <p id="confirmacaoMensagem" class="text-slate-300 text-sm leading-relaxed">
          Tem certeza que deseja realizar esta ação?
        </p>
      </div>
      
      <!-- Botões -->
      <div class="flex gap-3 justify-center">
        <button onclick="window.fecharModalConfirmacao(false)" class="bg-slate-600 hover:bg-slate-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center gap-2">
          <i class="fas fa-times"></i> Cancelar
        </button>
        <button id="btnConfirmar" onclick="window.confirmarAcao()" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center gap-2">
          <i class="fas fa-check"></i> Confirmar
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Sucesso -->
<div id="modalSucesso" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-[70]">
  <div class="bg-gradient-to-br from-green-900 to-green-800 p-8 rounded-2xl w-full max-w-md relative text-white shadow-2xl transform transition-all duration-500 scale-95 opacity-0 border border-green-500/30" id="modalSucessoContent">
    
    <!-- Animação de confete -->
    <div class="absolute inset-0 overflow-hidden rounded-2xl">
      <div class="confetti-container">
        <div class="confetti confetti-1"></div>
        <div class="confetti confetti-2"></div>
        <div class="confetti confetti-3"></div>
      </div>
    </div>
    
    <div class="relative z-10 text-center space-y-6">
      <!-- Ícone de sucesso -->
      <div class="flex justify-center">
        <div class="w-20 h-20 bg-green-500/30 rounded-full flex items-center justify-center relative">
          <div class="w-16 h-16 bg-green-500/50 rounded-full flex items-center justify-center animate-pulse">
            <i class="fas fa-check text-white text-3xl animate-bounce"></i>
          </div>
          <div class="absolute inset-0 rounded-full border-2 border-green-400 animate-ping"></div>
        </div>
      </div>
      
      <!-- Título e mensagem -->
      <div>
        <h2 class="text-2xl font-bold text-green-100 mb-3">
          ✅ Sucesso!
        </h2>
        <p id="sucessoMensagem" class="text-green-200 text-sm leading-relaxed">
          Ação realizada com sucesso!
        </p>
      </div>
      
      <!-- Botão -->
      <button onclick="window.fecharModalSucesso(true)" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center justify-center gap-2 mx-auto">
        <i class="fas fa-check-circle"></i> Continuar
      </button>
    </div>
  </div>
</div>

<!-- Modal de Erro -->
<div id="modalErro" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-[70]">
  <div class="bg-gradient-to-br from-red-900 to-red-800 p-8 rounded-2xl w-full max-w-md relative text-white shadow-2xl transform transition-all duration-500 scale-95 opacity-0 border border-red-500/30" id="modalErroContent">
    
    <div class="text-center space-y-6">
      <!-- Ícone de erro -->
      <div class="flex justify-center">
        <div class="w-20 h-20 bg-red-500/30 rounded-full flex items-center justify-center relative">
          <div class="w-16 h-16 bg-red-500/50 rounded-full flex items-center justify-center animate-pulse">
            <i class="fas fa-exclamation-triangle text-white text-3xl animate-bounce"></i>
          </div>
          <div class="absolute inset-0 rounded-full border-2 border-red-400 animate-ping"></div>
        </div>
      </div>
      
      <!-- Título e mensagem -->
      <div>
        <h2 class="text-2xl font-bold text-red-100 mb-3">
          ❌ Erro!
        </h2>
        <p id="erroMensagem" class="text-red-200 text-sm leading-relaxed">
          Ocorreu um erro ao realizar a ação.
        </p>
      </div>
      
      <!-- Botão -->
      <button onclick="window.fecharModalErro(true)" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center justify-center gap-2 mx-auto">
        <i class="fas fa-times-circle"></i> Fechar
      </button>
    </div>
  </div>
</div>

<!-- Modal de Aviso -->
<div id="modalAviso" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-[70]">
  <div class="bg-gradient-to-br from-orange-900 to-orange-800 p-8 rounded-2xl w-full max-w-md relative text-white shadow-2xl transform transition-all duration-500 scale-95 opacity-0 border border-orange-500/30" id="modalAvisoContent">
    
    <div class="text-center space-y-6">
      <!-- Ícone de aviso -->
      <div class="flex justify-center">
        <div class="w-20 h-20 bg-orange-500/30 rounded-full flex items-center justify-center relative">
          <div class="w-16 h-16 bg-orange-500/50 rounded-full flex items-center justify-center animate-pulse">
            <i class="fas fa-exclamation text-white text-3xl animate-bounce"></i>
          </div>
          <div class="absolute inset-0 rounded-full border-2 border-orange-400 animate-ping"></div>
        </div>
      </div>
      
      <!-- Título e mensagem -->
      <div>
        <h2 class="text-2xl font-bold text-orange-100 mb-3">
          ⚠️ Atenção!
        </h2>
        <p id="avisoMensagem" class="text-orange-200 text-sm leading-relaxed">
          Informação importante.
        </p>
      </div>
      
      <!-- Botão -->
      <button onclick="window.fecharModalAviso(true)" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center justify-center gap-2 mx-auto">
        <i class="fas fa-info-circle"></i> Entendi
      </button>
    </div>
  </div>
</div>

<style>
/* Animações para os modais de alerta */
.confetti-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}

.confetti {
  position: absolute;
  width: 6px;
  height: 6px;
  animation: confetti-fall 2s linear infinite;
}

.confetti-1 { 
  left: 20%; 
  animation-delay: 0s; 
  background: #ffd700; 
  border-radius: 50%;
}
.confetti-2 { 
  left: 50%; 
  animation-delay: 0.5s; 
  background: #4ade80; 
  border-radius: 2px;
}
.confetti-3 { 
  left: 80%; 
  animation-delay: 1s; 
  background: #60a5fa; 
  border-radius: 50%;
}

@keyframes confetti-fall {
  0% {
    transform: translateY(-50px) rotate(0deg);
    opacity: 1;
  }
  100% {
    transform: translateY(300px) rotate(360deg);
    opacity: 0;
  }
}

/* Animações de entrada dos modais */
.modal-show {
  opacity: 1 !important;
  transform: scale(1) !important;
}

/* Efeito de shake para erros */
@keyframes shake {
  0%, 100% { transform: translateX(0); }
  10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
  20%, 40%, 60%, 80% { transform: translateX(5px); }
}

.shake {
  animation: shake 0.5s ease-in-out;
}
</style>

<script>
// Variáveis globais para controle dos modais
let acaoConfirmada = null;
let parametrosAcao = null;
let recarregarPaginaAposAcao = false; // Nova variável para controlar o recarregamento

// Função para mostrar modal de confirmação
window.mostrarConfirmacao = function(titulo, mensagem, callback, params = null, tipoBtn = 'danger', recarregar = false) {
  document.getElementById('confirmacaoTitulo').textContent = titulo;
  document.getElementById('confirmacaoMensagem').textContent = mensagem;
  
  // Configurar botão baseado no tipo
  const btnConfirmar = document.getElementById('btnConfirmar');
  if (tipoBtn === 'danger') {
    btnConfirmar.className = 'bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center gap-2';
    btnConfirmar.innerHTML = '<i class="fas fa-check"></i> Confirmar';
  } else if (tipoBtn === 'warning') {
    btnConfirmar.className = 'bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center gap-2';
    btnConfirmar.innerHTML = '<i class="fas fa-exclamation-triangle"></i> Prosseguir';
  } else {
    btnConfirmar.className = 'bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 flex items-center gap-2';
    btnConfirmar.innerHTML = '<i class="fas fa-check"></i> Confirmar';
  }
  
  acaoConfirmada = callback;
  parametrosAcao = params;
  recarregarPaginaAposAcao = recarregar; // Define se a página deve recarregar
  
  const modal = document.getElementById('modalConfirmacao');
  const content = document.getElementById('modalConfirmacaoContent');
  
  modal.classList.remove('hidden');
  
  setTimeout(() => {
    content.classList.remove('scale-95', 'opacity-0');
    content.classList.add('scale-100', 'opacity-100');
  }, 10);
};

// Função para confirmar ação
window.confirmarAcao = function() {
  if (acaoConfirmada) {
    if (parametrosAcao) {
      acaoConfirmada(...parametrosAcao);
    } else {
      acaoConfirmada();
    }
  }
  window.fecharModalConfirmacao(true); // Fechar o modal de confirmação após a ação
};

// Função para fechar modal de confirmação
window.fecharModalConfirmacao = function(confirmado = false) {
  const modal = document.getElementById('modalConfirmacao');
  const content = document.getElementById('modalConfirmacaoContent');
  
  content.classList.add('scale-95', 'opacity-0');
  content.classList.remove('scale-100', 'opacity-100');
  
  setTimeout(() => {
    modal.classList.add('hidden');
    if (!confirmado) {
      acaoConfirmada = null;
      parametrosAcao = null;
      recarregarPaginaAposAcao = false; // Resetar a flag
    }
  }, 300);
};

// Função para mostrar modal de sucesso
window.mostrarSucesso = function(mensagem, autoClose = true) {
  document.getElementById('sucessoMensagem').textContent = mensagem;
  
  const modal = document.getElementById('modalSucesso');
  const content = document.getElementById('modalSucessoContent');
  
  modal.classList.remove('hidden');
  
  setTimeout(() => {
    content.classList.remove('scale-95', 'opacity-0');
    content.classList.add('scale-100', 'opacity-100');
  }, 10);
  
  if (autoClose) {
    setTimeout(() => {
      window.fecharModalSucesso(recarregarPaginaAposAcao); // Passa a flag de recarregamento
    }, 3000);
  }
};

// Função para fechar modal de sucesso
window.fecharModalSucesso = function(recarregar = false) {
  const modal = document.getElementById('modalSucesso');
  const content = document.getElementById('modalSucessoContent');
  
  content.classList.add('scale-95', 'opacity-0');
  content.classList.remove('scale-100', 'opacity-100');
  
  setTimeout(() => {
    modal.classList.add('hidden');
    if (recarregar) {
      location.reload(); // Recarrega a página se a flag for verdadeira
    }
  }, 300);
};

// Função para mostrar modal de erro
window.mostrarErro = function(mensagem, autoClose = false) {
  document.getElementById('erroMensagem').textContent = mensagem;
  
  const modal = document.getElementById('modalErro');
  const content = document.getElementById('modalErroContent');
  
  modal.classList.remove('hidden');
  
  setTimeout(() => {
    content.classList.remove('scale-95', 'opacity-0');
    content.classList.add('scale-100', 'opacity-100');
    content.classList.add('shake');
    
    setTimeout(() => {
      content.classList.remove('shake');
    }, 500);
  }, 10);
  
  if (autoClose) {
    setTimeout(() => {
      window.fecharModalErro(); // Não recarrega a página
    }, 4000);
  }
};

// Função para fechar modal de erro
window.fecharModalErro = function() {
  const modal = document.getElementById('modalErro');
  const content = document.getElementById('modalErroContent');
  
  content.classList.add('scale-95', 'opacity-0');
  content.classList.remove('scale-100', 'opacity-100');
  
  setTimeout(() => {
    modal.classList.add('hidden');
    if (recarregar) {
      location.reload(); // Recarrega a página se a flag for verdadeira
    }
  }, 300);
};

// Função para mostrar modal de aviso
window.mostrarAviso = function(mensagem, autoClose = false) {
  document.getElementById('avisoMensagem').textContent = mensagem;
  
  const modal = document.getElementById('modalAviso');
  const content = document.getElementById('modalAvisoContent');
  
  modal.classList.remove('hidden');
  
  setTimeout(() => {
    content.classList.remove('scale-95', 'opacity-0');
    content.classList.add('scale-100', 'opacity-100');
  }, 10);
  
  if (autoClose) {
    setTimeout(() => {
      window.fecharModalAviso(recarregarPaginaAposAcao); // Passa a flag de recarregamento
    }, 3000);
  }
};

// Função para fechar modal de aviso
window.fecharModalAviso = function(recarregar = false) {
  const modal = document.getElementById('modalAviso');
  const content = document.getElementById('modalAvisoContent');
  
  content.classList.add('scale-95', 'opacity-0');
  content.classList.remove('scale-100', 'opacity-100');
  
  setTimeout(() => {
    modal.classList.add('hidden');
    if (recarregar) {
      location.reload(); // Recarrega a página se a flag for verdadeira
    }
  }, 300);
};

// Event listeners para fechar modais clicando fora
document.addEventListener('click', function(e) {
  if (e.target.id === 'modalConfirmacao') {
    window.fecharModalConfirmacao(false);
  } else if (e.target.id === 'modalSucesso') {
    window.fecharModalSucesso();
  } else if (e.target.id === 'modalErro') {
    window.fecharModalErro();
  } else if (e.target.id === 'modalAviso') {
    window.fecharModalAviso();
  }
});

// Event listener para ESC
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    window.fecharModalConfirmacao(false);
    window.fecharModalSucesso();
    window.fecharModalErro();
    window.fecharModalAviso();
  }
});

</script>



    <script>
        // Variáveis globais
        let currentTab = 'api-keys';

        // Inicialização
        document.addEventListener('DOMContentLoaded', function() {
            loadApiKeys();
            loadTempLinks();
        });

        // Funções de Tab
        function switchTab(tabName) {
            // Remover classe active de todas as tabs
            document.querySelectorAll('.tab-button').forEach(tab => {
                tab.classList.remove('active', 'border-cyan-500', 'text-cyan-400', 'border-purple-500', 'text-purple-400');
                tab.classList.add('border-transparent', 'text-slate-400');
            });

            // Esconder todo o conteúdo
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Ativar tab selecionada
            const activeTab = document.getElementById(`tab-${tabName}`);
            const activeContent = document.getElementById(`content-${tabName}`);
            
            if (tabName === 'api-keys') {
                activeTab.classList.add('border-cyan-500', 'text-cyan-400');
            } else if (tabName === 'temp-links') {
                activeTab.classList.add('border-purple-500', 'text-purple-400');
            } else {
                activeTab.classList.add('border-slate-500', 'text-slate-300');
            }
            
            activeTab.classList.remove('border-transparent', 'text-slate-400');
            activeTab.classList.add('active');
            activeContent.classList.remove('hidden');

            currentTab = tabName;
        }

        // Funções de Modal - API Key
        function openCreateApiModal() {
            const modal = document.getElementById('createApiModal');
            const modalContent = document.getElementById('createApiModalContent');
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.add('modal-show');
            }, 10);
        }

        function closeCreateApiModal() {
            const modal = document.getElementById('createApiModal');
            const modalContent = document.getElementById('createApiModalContent');
            
            modalContent.classList.remove('modal-show');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.getElementById('createApiForm').reset();
            }, 300);
        }

        function openShowApiKeyModal(apiKey, apiName) {
            document.getElementById('generatedApiKey').value = apiKey;
            
            const modal = document.getElementById('showApiKeyModal');
            const modalContent = document.getElementById('showApiKeyModalContent');
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.add('modal-show');
            }, 10);
        }

        function closeShowApiKeyModal() {
            const modal = document.getElementById('showApiKeyModal');
            const modalContent = document.getElementById('showApiKeyModalContent');
            
            modalContent.classList.remove('modal-show');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // Funções de Modal - Link Temporário
        function openCreateTempLinkModal() {
            const modal = document.getElementById('createTempLinkModal');
            const modalContent = document.getElementById('createTempLinkModalContent');
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.add('modal-show');
            }, 10);
        }

        function closeTempLinkModal() {
            const modal = document.getElementById('createTempLinkModal');
            const modalContent = document.getElementById('createTempLinkModalContent');
            
            modalContent.classList.remove('modal-show');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.getElementById('createTempLinkForm').reset();
                toggleExpirationField(); // Reset field visibility
            }, 300);
        }

        function openShowTempLinkModal(tempLink, isPermanent, expiresAt) {
            document.getElementById('generatedTempLink').value = tempLink;
            
            const infoDiv = document.getElementById('tempLinkInfo');
            if (isPermanent) {
                infoDiv.innerHTML = `
                    <h4 class="font-semibold text-blue-300 mb-2">
                        <i class="fas fa-infinity mr-2"></i>Link Permanente:
                    </h4>
                    <p class="text-blue-200 text-sm">
                        Este link não expira e pode ser usado quantas vezes for necessário.
                    </p>
                `;
            } else {
                infoDiv.innerHTML = `
                    <h4 class="font-semibold text-blue-300 mb-2">
                        <i class="fas fa-clock mr-2"></i>Link Temporário:
                    </h4>
                    <p class="text-blue-200 text-sm">
                        Este link expira em: <strong>${new Date(expiresAt).toLocaleString('pt-BR')}</strong>
                    </p>
                `;
            }
            
            const modal = document.getElementById('showTempLinkModal');
            const modalContent = document.getElementById('showTempLinkModalContent');
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.add('modal-show');
            }, 10);
        }

        function closeShowTempLinkModal() {
            const modal = document.getElementById('showTempLinkModal');
            const modalContent = document.getElementById('showTempLinkModalContent');
            
            modalContent.classList.remove('modal-show');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // Função para alternar campo de expiração
        function toggleExpirationField() {
            const linkType = document.getElementById('linkType').value;
            const expirationField = document.getElementById('expirationField');
            
            if (linkType === 'permanent') {
                expirationField.style.display = 'none';
            } else {
                expirationField.style.display = 'block';
            }
        }

        // Submissão de formulários
        function submitCreateApi(event) {
            event.preventDefault();
            
            const formData = new FormData(event.target);
            formData.append('action', 'create_api_key');
            
            fetch('scripts/api_keys_manager.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    closeCreateApiModal();
                    openShowApiKeyModal(data.api_key, data.api_name);
                    loadApiKeys();
                } else {
                    mostrarErro(data.message);
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                mostrarErro('Erro de conexão');
            });
        }

        function submitCreateTempLink(event) {
            event.preventDefault();
            
            const formData = new FormData(event.target);
            formData.append('action', 'create_temp_link');
            
            const linkType = document.getElementById('linkType').value;
            formData.append('is_permanent', linkType === 'permanent' ? 'true' : 'false');
            
            fetch('scripts/api_keys_manager.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    closeTempLinkModal();
                    openShowTempLinkModal(data.reset_url, data.is_permanent, data.expires_at);
                    loadTempLinks();
                } else {
                    mostrarErro(data.message);
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                mostrarErro('Erro de conexão');
            });
        }

        // Carregar dados
        function loadApiKeys() {
            const formData = new FormData();
            formData.append('action', 'list_api_keys');
            
            fetch('scripts/api_keys_manager.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    renderApiKeys(data.api_keys);
                } else {
                    document.getElementById('api-keys-list').innerHTML = '<p class="text-slate-400 text-center py-8">Erro ao carregar API keys</p>';
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                document.getElementById('api-keys-list').innerHTML = '<p class="text-slate-400 text-center py-8">Erro de conexão</p>';
            });
        }

        function loadTempLinks() {
            const formData = new FormData();
            formData.append('action', 'list_temp_links');
            
            fetch('scripts/api_keys_manager.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    renderTempLinks(data.temp_links);
                } else {
                    document.getElementById('temp-links-list').innerHTML = '<p class="text-slate-400 text-center py-8">Erro ao carregar links temporários</p>';
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                document.getElementById('temp-links-list').innerHTML = '<p class="text-slate-400 text-center py-8">Erro de conexão</p>';
            });
        }

        // Renderização
        function renderApiKeys(apiKeys) {
            const container = document.getElementById('api-keys-list');
            
            if (apiKeys.length === 0) {
                container.innerHTML = '<p class="text-slate-400 text-center py-8">Nenhuma API key encontrada</p>';
                return;
            }
            
            container.innerHTML = apiKeys.map(apiKey => {
                const isActive = apiKey.is_active == 1;
                const statusClass = isActive ? 'bg-green-500/20 text-green-400 border-green-500/30' : 'bg-red-500/20 text-red-400 border-red-500/30';
                const statusText = isActive ? 'Ativa' : 'Inativa';
                const statusIcon = isActive ? 'fas fa-check-circle' : 'fas fa-times-circle';
                
                return `
                    <div class="bg-[#1e293b] rounded-xl p-6 border border-slate-700/50 card-hover animate-fadeInUp">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <div class="flex items-center space-x-3 mb-3">
                                    <div class="w-10 h-10 bg-cyan-500/20 rounded-full flex items-center justify-center">
                                        <i class="fas fa-key text-cyan-400"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-white">${apiKey.api_name}</h4>
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border ${statusClass}">
                                            <i class="${statusIcon} mr-1.5"></i>
                                            ${statusText}
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="space-y-2 text-sm text-slate-400">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar-plus w-4 mr-2 text-slate-500"></i>
                                        <span>Criada: ${new Date(apiKey.created_at).toLocaleString('pt-BR')}</span>
                                    </div>
                                    ${apiKey.last_used ? `
                                        <div class="flex items-center">
                                            <i class="fas fa-clock w-4 mr-2 text-slate-500"></i>
                                            <span>Último uso: ${new Date(apiKey.last_used).toLocaleString('pt-BR')}</span>
                                        </div>
                                    ` : ''}
                                    <div class="flex items-center">
                                        <i class="fas fa-fingerprint w-4 mr-2 text-slate-500"></i>
                                        <span class="font-mono text-xs">${apiKey.api_key.substring(0, 8)}...${apiKey.api_key.substring(-8)}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex space-x-2 ml-4">
                                <button onclick="toggleApiKey(${apiKey.id})" 
                                        class="px-3 py-2 ${isActive ? 'bg-red-600 hover:bg-red-700' : 'bg-green-600 hover:bg-green-700'} text-white rounded-lg transition-colors flex items-center gap-2 text-sm">
                                    <i class="fas ${isActive ? 'fa-pause' : 'fa-play'}"></i>
                                    <span class="hidden sm:inline">${isActive ? 'Desativar' : 'Ativar'}</span>
                                </button>
                                <button onclick="deleteApiKey(${apiKey.id})" 
                                        class="px-3 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors flex items-center gap-2 text-sm">
                                    <i class="fas fa-trash"></i>
                                    <span class="hidden sm:inline">Deletar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        function renderTempLinks(tempLinks) {
            const container = document.getElementById('temp-links-list');
            
            if (tempLinks.length === 0) {
                container.innerHTML = '<p class="text-slate-400 text-center py-8">Nenhum link de reset encontrado</p>';
                return;
            }
            
            container.innerHTML = tempLinks.map(link => {
                const isPermanent = link.is_permanent == 1;
                const isExpired = !isPermanent && link.is_expired;
                
                let statusClass, statusText, statusIcon;
                
                if (isPermanent) {
                    statusClass = 'bg-blue-500/20 text-blue-400 border-blue-500/30';
                    statusText = 'Permanente';
                    statusIcon = 'fas fa-infinity';
                } else if (isExpired) {
                    statusClass = 'bg-red-500/20 text-red-400 border-red-500/30';
                    statusText = 'Expirado';
                    statusIcon = 'fas fa-times-circle';
                } else {
                    statusClass = 'bg-green-500/20 text-green-400 border-green-500/30';
                    statusText = 'Ativo';
                    statusIcon = 'fas fa-check-circle';
                }
                
                return `
                    <div class="bg-[#1e293b] rounded-xl p-6 border border-slate-700/50 card-hover animate-fadeInUp">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex-1">
                                <div class="flex items-center space-x-3 mb-3">
                                    <div class="w-10 h-10 bg-purple-500/20 rounded-full flex items-center justify-center">
                                        <i class="fas fa-link text-purple-400"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-white">Link de Reset</h4>
                                        <div class="flex items-center space-x-2 mt-1">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border ${statusClass}">
                                                <i class="${statusIcon} mr-1.5"></i>
                                                ${statusText}
                                            </span>
                                            ${isPermanent ? '<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-amber-500/20 text-amber-400 border border-amber-500/30"><i class="fas fa-star mr-1.5"></i>Sem Expiração</span>' : ''}
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="space-y-2 text-sm text-slate-400">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar-plus w-4 mr-2 text-slate-500"></i>
                                        <span>Criado: ${new Date(link.created_at).toLocaleString('pt-BR')}</span>
                                    </div>
                                    ${!isPermanent ? `
                                        <div class="flex items-center">
                                            <i class="fas fa-clock w-4 mr-2 text-slate-500"></i>
                                            <span>Expira: ${new Date(link.expires_at).toLocaleString('pt-BR')}</span>
                                        </div>
                                    ` : ''}
                                </div>
                            </div>
                            
                            <div class="flex space-x-2 ml-4">
                                <button onclick="copyTempLink('${link.reset_url}')" 
                                        class="px-3 py-2 bg-slate-600 hover:bg-slate-700 text-white rounded-lg transition-colors flex items-center gap-2 text-sm">
                                    <i class="fas fa-copy"></i>
                                    <span class="hidden sm:inline">Copiar</span>
                                </button>
                                <button onclick="deleteTempLink(${link.id})" 
                                        class="px-3 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors flex items-center gap-2 text-sm">
                                    <i class="fas fa-trash"></i>
                                    <span class="hidden sm:inline">Deletar</span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="bg-slate-800/50 rounded-lg p-3 border border-slate-700/50">
                            <label class="block text-xs font-medium text-slate-400 mb-2">
                                <i class="fas fa-link mr-1"></i>
                                URL do Link:
                            </label>
                            <div class="flex items-center space-x-2">
                                <input type="text" value="${link.reset_url}" 
                                       class="flex-1 px-3 py-2 bg-slate-700 border border-slate-600 rounded-lg text-white text-sm font-mono focus:outline-none focus:ring-2 focus:ring-purple-500" 
                                       readonly>
                                <button onclick="copyTempLink('${link.reset_url}')" 
                                        class="px-3 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg transition-colors">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        // Funções de cópia
        function copyApiKey() {
            const apiKeyInput = document.getElementById('generatedApiKey');
            navigator.clipboard.writeText(apiKeyInput.value).then(() => {
                // Feedback visual
                const button = event.target.closest('button');
                const originalContent = button.innerHTML;
                button.innerHTML = '<i class="fas fa-check text-green-600"></i>';
                setTimeout(() => {
                    button.innerHTML = originalContent;
                }, 2000);
            });
        }

        function copyTempLink(url) {
            navigator.clipboard.writeText(url).then(() => {
                // Feedback visual
                const button = event.target.closest('button');
                const originalContent = button.innerHTML;
                button.innerHTML = '<i class="fas fa-check text-green-600"></i>';
                setTimeout(() => {
                    button.innerHTML = originalContent;
                }, 2000);
            });
        }

        function copyTempLinkFromModal() {
            const tempLinkInput = document.getElementById('generatedTempLink');
            navigator.clipboard.writeText(tempLinkInput.value).then(() => {
                // Feedback visual
                const button = event.target.closest('button');
                const originalContent = button.innerHTML;
                button.innerHTML = '<i class="fas fa-check text-green-600"></i>';
                setTimeout(() => {
                    button.innerHTML = originalContent;
                }, 2000);
            });
        }

        // Alternar status da API Key
        function toggleApiKey(apiId) {
            const formData = new FormData();
            formData.append('action', 'toggle_api_key');
            formData.append('api_id', apiId);
            
            fetch('scripts/api_keys_manager.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    mostrarSucesso(data.message);
                    loadApiKeys();
                } else {
                    mostrarErro(data.message);
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                mostrarErro('Erro de conexão');
            });
        }

        // Deletar API Key
        function deleteApiKey(apiId) {
            mostrarConfirmacao(
                'Deletar API Key',
                'Tem certeza que deseja deletar esta API key? Esta ação não pode ser desfeita.',
                () => {
                    const formData = new FormData();
                    formData.append('action', 'delete_api_key');
                    formData.append('api_id', apiId);
                    
                    fetch('scripts/api_keys_manager.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            mostrarSucesso(data.message);
                            loadApiKeys();
                        } else {
                            mostrarErro(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Erro:', error);
                        mostrarErro('Erro de conexão');
                    });
                }
            );
        }

        // Deletar Link Temporário
        function deleteTempLink(linkId) {
            mostrarConfirmacao(
                'Deletar Link de Reset',
                'Tem certeza que deseja deletar este link? Esta ação não pode ser desfeita.',
                () => {
                    const formData = new FormData();
                    formData.append('action', 'delete_temp_link');
                    formData.append('link_id', linkId);
                    
                    fetch('scripts/api_keys_manager.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            mostrarSucesso(data.message);
                            loadTempLinks();
                        } else {
                            mostrarErro(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Erro:', error);
                        mostrarErro('Erro de conexão');
                    });
                }
            );
        }
    </script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"f288f319f18e490b9a89e8a7805b0616","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>

