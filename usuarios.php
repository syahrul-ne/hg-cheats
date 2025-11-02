<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Keys - HG CHEATS</title>
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
   
    
    <a href="usuarios" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-gradient-to-r from-blue-600 to-blue-700 text-white shadow-lg border border-blue-500/50">
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
    
        <a href="api_config" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-[#334155] text-slate-300 hover:text-white">
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

      <!-- Título Lista de Usuários no topo -->
      <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4 animate-fadeInUp">
        <div>
          <h2 class="text-lg font-semibold flex items-center gap-2">
            <i class="fas fa-list text-blue-400"></i>
            Lista de Keys
          </h2>
          <p class="text-sm text-slate-400 mt-1">Gerencie todas as keys criados por você</p>
        </div>
        <div class="flex gap-3">
          <button onclick="window.openModal('modalCriarUsuario')" class="btn-gradient text-white px-6 py-3 rounded-lg flex items-center gap-2 font-semibold">
            <i class="fas fa-user-plus"></i> Criar Acesso
          </button>
          <button onclick="window.openModal('modalGerarUsuariosLote')" class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-6 py-3 rounded-lg flex items-center gap-2 font-semibold transition-all duration-200">
            <i class="fas fa-magic"></i> Gerar em Lote
          </button>
        </div>
      </div>

      <!-- Estatísticas dos usuários -->
      <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mb-6 stagger-children">
        
        <div class="bg-[#1e293b] p-4 rounded-xl border border-slate-700/50 card-hover animate-fadeInUp" style="--stagger-delay: 1">
          <div class="flex items-center gap-3">
            <div class="bg-blue-500/20 p-3 rounded-full">
              <i class="fas fa-users text-blue-400 text-xl"></i>
            </div>
            <div>
              <p class="text-sm text-slate-400">Total</p>
              <p class="text-xl font-bold text-blue-400" id="totalUsuariosStat">358</p>
            </div>
          </div>
        </div>
        
        <div class="bg-[#1e293b] p-4 rounded-xl border border-slate-700/50 card-hover animate-fadeInUp" style="--stagger-delay: 2">
          <div class="flex items-center gap-3">
            <div class="bg-gray-500/20 p-3 rounded-full">
              <i class="fas fa-user-times text-gray-400 text-xl"></i>
            </div>
            <div>
              <p class="text-sm text-slate-400">Inativos</p>
              <p class="text-xl font-bold text-gray-400" id="usuariosInativosStat">243</p>
            </div>
          </div>
        </div>
        
        <div class="bg-[#1e293b] p-4 rounded-xl border border-slate-700/50 card-hover animate-fadeInUp" style="--stagger-delay: 3">
          <div class="flex items-center gap-3">
            <div class="bg-green-500/20 p-3 rounded-full">
              <i class="fas fa-user-check text-green-400 text-xl"></i>
            </div>
            <div>
              <p class="text-sm text-slate-400">Ativos</p>
              <p class="text-xl font-bold text-green-400" id="usuariosAtivosStat">113</p>
            </div>
          </div>
        </div>
        
        <div class="bg-[#1e293b] p-4 rounded-xl border border-slate-700/50 card-hover animate-fadeInUp" style="--stagger-delay: 4">
          <div class="flex items-center gap-3">
            <div class="bg-yellow-500/20 p-3 rounded-full">
              <i class="fas fa-user-clock text-yellow-400 text-xl"></i>
            </div>
            <div>
              <p class="text-sm text-slate-400">Expirados</p>
              <p class="text-xl font-bold text-yellow-400" id="usuariosExpiradosStat">2</p>
            </div>
          </div>
        </div>
        
        <div class="bg-[#1e293b] p-4 rounded-xl border border-slate-700/50 card-hover animate-fadeInUp" style="--stagger-delay: 5">
          <div class="flex items-center gap-3">
            <div class="bg-red-500/20 p-3 rounded-full">
              <i class="fas fa-user-slash text-red-400 text-xl"></i>
            </div>
            <div>
              <p class="text-sm text-slate-400">Banidos</p>
              <p class="text-xl font-bold text-red-400" id="usuariosBanidosStat">0</p>
            </div>
          </div>
        </div>
        
        <div class="bg-[#1e293b] p-4 rounded-xl border border-slate-700/50 card-hover animate-fadeInUp" style="--stagger-delay: 6">
          <div class="flex items-center gap-3">
            <div class="bg-orange-500/20 p-3 rounded-full">
              <i class="fas fa-solid fa-circle-pause text-orange-400 text-xl"></i>
            </div>
            <div>
              <p class="text-sm text-slate-400">Pausados</p>
              <p class="text-xl font-bold text-orange-400" id="usuariosPausadosStat">243</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Filtros -->
      <div class="bg-[#1e293b] rounded-xl border border-slate-700/50 p-4 mb-6 animate-fadeInUp delay-200">
        <form id="filterForm" onsubmit="event.preventDefault(); fetchUsers();">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Campo de busca -->
            <div>
              <label class="block text-sm font-medium text-slate-300 mb-2">
                <i class="fas fa-search mr-2"></i>Buscar Key
              </label>
              <input type="text" name="search" id="searchInput" value="" placeholder="Digite o nome da key..." 
                class="w-full px-4 py-2 rounded-lg bg-slate-800 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
            </div>
            
            <!-- Filtro de status -->
            <div>
              <label class="block text-sm font-medium text-slate-300 mb-2">
                <i class="fas fa-filter mr-2"></i>Status
              </label>
              <select name="status" id="statusSelect" class="w-full px-4 py-2 rounded-lg bg-slate-800 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
                <option value="" selected>Todos</option>
                <option value="inativo" >Inativos</option>
                <option value="ativo" >Ativos</option>
                <option value="expirado" >Expirados</option>
                <option value="banido" >Banidos</option>
                <option value="pausado" >Pausados</option>
              </select>
            </div>
            
            <!-- Itens por página -->
            <div>
              <label class="block text-sm font-medium text-slate-300 mb-2">
                <i class="fas fa-list-ol mr-2"></i>Por página
              </label>
              <select name="limit" id="limitSelect" class="w-full px-4 py-2 rounded-lg bg-slate-800 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
                <option value="10" selected>10</option>
                <option value="25" >25</option>
                <option value="50" >50</option>
                <option value="100" >100</option>
              </select>
            </div>
          </div>
        </form>
      </div>

      <!-- Tabela de usuários -->
      <div class="bg-[#1e293b] rounded-xl border border-slate-700/50 overflow-hidden animate-fadeInUp delay-300">
        
        <div class="overflow-x-auto">
          <table class="min-w-full">
            <thead class="bg-[#334155] text-white text-sm">
              <tr>
                <th class="px-6 py-4 text-left font-semibold">Key</th>
                                <th class="px-6 py-4 text-left font-semibold">Produto</th>
                <th class="px-6 py-4 text-left font-semibold">Registrado em</th>
                <th class="px-6 py-4 text-left font-semibold">Expira em</th>
                <th class="px-6 py-4 text-left font-semibold">Dias Restantes</th>
                <th class="px-6 py-4 text-left font-semibold">Status</th>
                <th class="px-6 py-4 text-left font-semibold">Ações</th>
              </tr>
            </thead>
            <tbody id="usuariosTableBody" class="text-gray-300">
              
<tr class="border-b border-gray-700 hover:bg-slate-800/50 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-indigo-500/20 p-2 rounded-full">
                <i class="fas fa-user text-indigo-400"></i>
            </div>
            <div>
                <p class="font-medium text-white">HG-NELTGC</p>
                <p class="text-xs text-slate-400">ID: 15788</p>
            </div>
        </div>
    </td>
        <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <div class="bg-purple-500/20 p-1 rounded">
                <i class="fas fa-cube text-purple-400 text-sm"></i>
            </div>
            <div class="text-sm">
                <p class="text-white font-medium">ApkMod Brutal 1.0</p>
                <p class="text-xs text-slate-400">Produto</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">17/09/2025</p>
            <p class="text-slate-400">15:48</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">06/11/2025</p>
            <p class="text-slate-400">08:12</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <span class="font-semibold text-yellow-400">
            3 dias        </span>
            </td>
    <td class="px-6 py-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
            <i class="fas fa-check-circle"></i>
            Ativo        </span>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2 flex-wrap">
            <!-- Botão Gerenciar -->
            <button onclick="abrirGerenciar('HG-NELTGC')" 
                    class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-400 px-3 py-2 rounded-lg text-sm transition-colors flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Gerenciar
            </button>
            
                            <!-- Ativo - pode banir ou pausar -->
                <div class="flex gap-1">
                    <button onclick="banirUsuario('HG-NELTGC', 1)" 
                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Banir">
                        <i class="fas fa-ban"></i>
                    </button>
                    <button onclick="pausarUsuario('HG-NELTGC')" 
                            class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Pausar">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
                        
            <!-- Botão Deletar -->
            <button onclick="deletarUsuario('HG-NELTGC')" 
                    class="bg-red-600/20 hover:bg-red-600/30 text-red-300 px-2 py-2 rounded-lg text-sm transition-colors" 
                    title="Deletar Permanentemente">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
<tr class="border-b border-gray-700 hover:bg-slate-800/50 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-indigo-500/20 p-2 rounded-full">
                <i class="fas fa-user text-indigo-400"></i>
            </div>
            <div>
                <p class="font-medium text-white">HG-NLGGCD</p>
                <p class="text-xs text-slate-400">ID: 15787</p>
            </div>
        </div>
    </td>
        <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <div class="bg-purple-500/20 p-1 rounded">
                <i class="fas fa-cube text-purple-400 text-sm"></i>
            </div>
            <div class="text-sm">
                <p class="text-white font-medium">ApkMod Brutal 1.0</p>
                <p class="text-xs text-slate-400">Produto</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">17/09/2025</p>
            <p class="text-slate-400">15:48</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">06/11/2025</p>
            <p class="text-slate-400">03:54</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <span class="font-semibold text-yellow-400">
            3 dias        </span>
            </td>
    <td class="px-6 py-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
            <i class="fas fa-check-circle"></i>
            Ativo        </span>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2 flex-wrap">
            <!-- Botão Gerenciar -->
            <button onclick="abrirGerenciar('HG-NLGGCD')" 
                    class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-400 px-3 py-2 rounded-lg text-sm transition-colors flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Gerenciar
            </button>
            
                            <!-- Ativo - pode banir ou pausar -->
                <div class="flex gap-1">
                    <button onclick="banirUsuario('HG-NLGGCD', 1)" 
                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Banir">
                        <i class="fas fa-ban"></i>
                    </button>
                    <button onclick="pausarUsuario('HG-NLGGCD')" 
                            class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Pausar">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
                        
            <!-- Botão Deletar -->
            <button onclick="deletarUsuario('HG-NLGGCD')" 
                    class="bg-red-600/20 hover:bg-red-600/30 text-red-300 px-2 py-2 rounded-lg text-sm transition-colors" 
                    title="Deletar Permanentemente">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
<tr class="border-b border-gray-700 hover:bg-slate-800/50 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-indigo-500/20 p-2 rounded-full">
                <i class="fas fa-user text-indigo-400"></i>
            </div>
            <div>
                <p class="font-medium text-white">HG-CIKWHK</p>
                <p class="text-xs text-slate-400">ID: 15786</p>
            </div>
        </div>
    </td>
        <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <div class="bg-purple-500/20 p-1 rounded">
                <i class="fas fa-cube text-purple-400 text-sm"></i>
            </div>
            <div class="text-sm">
                <p class="text-white font-medium">ApkMod Brutal 1.0</p>
                <p class="text-xs text-slate-400">Produto</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">17/09/2025</p>
            <p class="text-slate-400">15:48</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">07/11/2025</p>
            <p class="text-slate-400">23:20</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <span class="font-semibold text-yellow-400">
            5 dias        </span>
            </td>
    <td class="px-6 py-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
            <i class="fas fa-check-circle"></i>
            Ativo        </span>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2 flex-wrap">
            <!-- Botão Gerenciar -->
            <button onclick="abrirGerenciar('HG-CIKWHK')" 
                    class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-400 px-3 py-2 rounded-lg text-sm transition-colors flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Gerenciar
            </button>
            
                            <!-- Ativo - pode banir ou pausar -->
                <div class="flex gap-1">
                    <button onclick="banirUsuario('HG-CIKWHK', 1)" 
                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Banir">
                        <i class="fas fa-ban"></i>
                    </button>
                    <button onclick="pausarUsuario('HG-CIKWHK')" 
                            class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Pausar">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
                        
            <!-- Botão Deletar -->
            <button onclick="deletarUsuario('HG-CIKWHK')" 
                    class="bg-red-600/20 hover:bg-red-600/30 text-red-300 px-2 py-2 rounded-lg text-sm transition-colors" 
                    title="Deletar Permanentemente">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
<tr class="border-b border-gray-700 hover:bg-slate-800/50 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-indigo-500/20 p-2 rounded-full">
                <i class="fas fa-user text-indigo-400"></i>
            </div>
            <div>
                <p class="font-medium text-white">HG-WHAALE</p>
                <p class="text-xs text-slate-400">ID: 15784</p>
            </div>
        </div>
    </td>
        <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <div class="bg-purple-500/20 p-1 rounded">
                <i class="fas fa-cube text-purple-400 text-sm"></i>
            </div>
            <div class="text-sm">
                <p class="text-white font-medium">ApkMod Brutal 1.0</p>
                <p class="text-xs text-slate-400">Produto</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">17/09/2025</p>
            <p class="text-slate-400">15:48</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">08/11/2025</p>
            <p class="text-slate-400">20:56</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <span class="font-semibold text-yellow-400">
            6 dias        </span>
            </td>
    <td class="px-6 py-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
            <i class="fas fa-check-circle"></i>
            Ativo        </span>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2 flex-wrap">
            <!-- Botão Gerenciar -->
            <button onclick="abrirGerenciar('HG-WHAALE')" 
                    class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-400 px-3 py-2 rounded-lg text-sm transition-colors flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Gerenciar
            </button>
            
                            <!-- Ativo - pode banir ou pausar -->
                <div class="flex gap-1">
                    <button onclick="banirUsuario('HG-WHAALE', 1)" 
                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Banir">
                        <i class="fas fa-ban"></i>
                    </button>
                    <button onclick="pausarUsuario('HG-WHAALE')" 
                            class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Pausar">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
                        
            <!-- Botão Deletar -->
            <button onclick="deletarUsuario('HG-WHAALE')" 
                    class="bg-red-600/20 hover:bg-red-600/30 text-red-300 px-2 py-2 rounded-lg text-sm transition-colors" 
                    title="Deletar Permanentemente">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
<tr class="border-b border-gray-700 hover:bg-slate-800/50 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-indigo-500/20 p-2 rounded-full">
                <i class="fas fa-user text-indigo-400"></i>
            </div>
            <div>
                <p class="font-medium text-white">HG-BNDKLL</p>
                <p class="text-xs text-slate-400">ID: 15782</p>
            </div>
        </div>
    </td>
        <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <div class="bg-purple-500/20 p-1 rounded">
                <i class="fas fa-cube text-purple-400 text-sm"></i>
            </div>
            <div class="text-sm">
                <p class="text-white font-medium">ApkMod Brutal 1.0</p>
                <p class="text-xs text-slate-400">Produto</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">17/09/2025</p>
            <p class="text-slate-400">15:48</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">12/11/2025</p>
            <p class="text-slate-400">11:56</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <span class="font-semibold text-green-400">
            10 dias        </span>
            </td>
    <td class="px-6 py-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
            <i class="fas fa-check-circle"></i>
            Ativo        </span>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2 flex-wrap">
            <!-- Botão Gerenciar -->
            <button onclick="abrirGerenciar('HG-BNDKLL')" 
                    class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-400 px-3 py-2 rounded-lg text-sm transition-colors flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Gerenciar
            </button>
            
                            <!-- Ativo - pode banir ou pausar -->
                <div class="flex gap-1">
                    <button onclick="banirUsuario('HG-BNDKLL', 1)" 
                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Banir">
                        <i class="fas fa-ban"></i>
                    </button>
                    <button onclick="pausarUsuario('HG-BNDKLL')" 
                            class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Pausar">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
                        
            <!-- Botão Deletar -->
            <button onclick="deletarUsuario('HG-BNDKLL')" 
                    class="bg-red-600/20 hover:bg-red-600/30 text-red-300 px-2 py-2 rounded-lg text-sm transition-colors" 
                    title="Deletar Permanentemente">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
<tr class="border-b border-gray-700 hover:bg-slate-800/50 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-indigo-500/20 p-2 rounded-full">
                <i class="fas fa-user text-indigo-400"></i>
            </div>
            <div>
                <p class="font-medium text-white">HG-OSVNMS</p>
                <p class="text-xs text-slate-400">ID: 15781</p>
            </div>
        </div>
    </td>
        <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <div class="bg-purple-500/20 p-1 rounded">
                <i class="fas fa-cube text-purple-400 text-sm"></i>
            </div>
            <div class="text-sm">
                <p class="text-white font-medium">ApkMod Brutal 1.0</p>
                <p class="text-xs text-slate-400">Produto</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">17/09/2025</p>
            <p class="text-slate-400">15:48</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">08/11/2025</p>
            <p class="text-slate-400">02:02</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <span class="font-semibold text-yellow-400">
            5 dias        </span>
            </td>
    <td class="px-6 py-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
            <i class="fas fa-check-circle"></i>
            Ativo        </span>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2 flex-wrap">
            <!-- Botão Gerenciar -->
            <button onclick="abrirGerenciar('HG-OSVNMS')" 
                    class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-400 px-3 py-2 rounded-lg text-sm transition-colors flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Gerenciar
            </button>
            
                            <!-- Ativo - pode banir ou pausar -->
                <div class="flex gap-1">
                    <button onclick="banirUsuario('HG-OSVNMS', 1)" 
                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Banir">
                        <i class="fas fa-ban"></i>
                    </button>
                    <button onclick="pausarUsuario('HG-OSVNMS')" 
                            class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Pausar">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
                        
            <!-- Botão Deletar -->
            <button onclick="deletarUsuario('HG-OSVNMS')" 
                    class="bg-red-600/20 hover:bg-red-600/30 text-red-300 px-2 py-2 rounded-lg text-sm transition-colors" 
                    title="Deletar Permanentemente">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
<tr class="border-b border-gray-700 hover:bg-slate-800/50 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-indigo-500/20 p-2 rounded-full">
                <i class="fas fa-user text-indigo-400"></i>
            </div>
            <div>
                <p class="font-medium text-white">HG-ZWWJCV</p>
                <p class="text-xs text-slate-400">ID: 15780</p>
            </div>
        </div>
    </td>
        <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <div class="bg-purple-500/20 p-1 rounded">
                <i class="fas fa-cube text-purple-400 text-sm"></i>
            </div>
            <div class="text-sm">
                <p class="text-white font-medium">ApkMod Brutal 1.0</p>
                <p class="text-xs text-slate-400">Produto</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">17/09/2025</p>
            <p class="text-slate-400">15:48</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">04/11/2025</p>
            <p class="text-slate-400">10:47</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <span class="font-semibold text-yellow-400">
            2 dias        </span>
            </td>
    <td class="px-6 py-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
            <i class="fas fa-check-circle"></i>
            Ativo        </span>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2 flex-wrap">
            <!-- Botão Gerenciar -->
            <button onclick="abrirGerenciar('HG-ZWWJCV')" 
                    class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-400 px-3 py-2 rounded-lg text-sm transition-colors flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Gerenciar
            </button>
            
                            <!-- Ativo - pode banir ou pausar -->
                <div class="flex gap-1">
                    <button onclick="banirUsuario('HG-ZWWJCV', 1)" 
                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Banir">
                        <i class="fas fa-ban"></i>
                    </button>
                    <button onclick="pausarUsuario('HG-ZWWJCV')" 
                            class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Pausar">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
                        
            <!-- Botão Deletar -->
            <button onclick="deletarUsuario('HG-ZWWJCV')" 
                    class="bg-red-600/20 hover:bg-red-600/30 text-red-300 px-2 py-2 rounded-lg text-sm transition-colors" 
                    title="Deletar Permanentemente">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
<tr class="border-b border-gray-700 hover:bg-slate-800/50 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-indigo-500/20 p-2 rounded-full">
                <i class="fas fa-user text-indigo-400"></i>
            </div>
            <div>
                <p class="font-medium text-white">HG-NTBEVU</p>
                <p class="text-xs text-slate-400">ID: 15779</p>
            </div>
        </div>
    </td>
        <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <div class="bg-purple-500/20 p-1 rounded">
                <i class="fas fa-cube text-purple-400 text-sm"></i>
            </div>
            <div class="text-sm">
                <p class="text-white font-medium">ApkMod Brutal 1.0</p>
                <p class="text-xs text-slate-400">Produto</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">17/09/2025</p>
            <p class="text-slate-400">15:48</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">09/11/2025</p>
            <p class="text-slate-400">01:23</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <span class="font-semibold text-yellow-400">
            6 dias        </span>
            </td>
    <td class="px-6 py-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
            <i class="fas fa-check-circle"></i>
            Ativo        </span>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2 flex-wrap">
            <!-- Botão Gerenciar -->
            <button onclick="abrirGerenciar('HG-NTBEVU')" 
                    class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-400 px-3 py-2 rounded-lg text-sm transition-colors flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Gerenciar
            </button>
            
                            <!-- Ativo - pode banir ou pausar -->
                <div class="flex gap-1">
                    <button onclick="banirUsuario('HG-NTBEVU', 1)" 
                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Banir">
                        <i class="fas fa-ban"></i>
                    </button>
                    <button onclick="pausarUsuario('HG-NTBEVU')" 
                            class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Pausar">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
                        
            <!-- Botão Deletar -->
            <button onclick="deletarUsuario('HG-NTBEVU')" 
                    class="bg-red-600/20 hover:bg-red-600/30 text-red-300 px-2 py-2 rounded-lg text-sm transition-colors" 
                    title="Deletar Permanentemente">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
<tr class="border-b border-gray-700 hover:bg-slate-800/50 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-indigo-500/20 p-2 rounded-full">
                <i class="fas fa-user text-indigo-400"></i>
            </div>
            <div>
                <p class="font-medium text-white">HG-PEUVBW</p>
                <p class="text-xs text-slate-400">ID: 15346</p>
            </div>
        </div>
    </td>
        <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <div class="bg-purple-500/20 p-1 rounded">
                <i class="fas fa-cube text-purple-400 text-sm"></i>
            </div>
            <div class="text-sm">
                <p class="text-white font-medium">ApkMod Brutal 1.0</p>
                <p class="text-xs text-slate-400">Produto</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">15/09/2025</p>
            <p class="text-slate-400">16:04</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">24/11/2025</p>
            <p class="text-slate-400">10:04</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <span class="font-semibold text-green-400">
            22 dias        </span>
            </td>
    <td class="px-6 py-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
            <i class="fas fa-check-circle"></i>
            Ativo        </span>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2 flex-wrap">
            <!-- Botão Gerenciar -->
            <button onclick="abrirGerenciar('HG-PEUVBW')" 
                    class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-400 px-3 py-2 rounded-lg text-sm transition-colors flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Gerenciar
            </button>
            
                            <!-- Ativo - pode banir ou pausar -->
                <div class="flex gap-1">
                    <button onclick="banirUsuario('HG-PEUVBW', 1)" 
                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Banir">
                        <i class="fas fa-ban"></i>
                    </button>
                    <button onclick="pausarUsuario('HG-PEUVBW')" 
                            class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Pausar">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
                        
            <!-- Botão Deletar -->
            <button onclick="deletarUsuario('HG-PEUVBW')" 
                    class="bg-red-600/20 hover:bg-red-600/30 text-red-300 px-2 py-2 rounded-lg text-sm transition-colors" 
                    title="Deletar Permanentemente">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
<tr class="border-b border-gray-700 hover:bg-slate-800/50 transition-colors">
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="bg-indigo-500/20 p-2 rounded-full">
                <i class="fas fa-user text-indigo-400"></i>
            </div>
            <div>
                <p class="font-medium text-white">HG-RZWZZC</p>
                <p class="text-xs text-slate-400">ID: 13542</p>
            </div>
        </div>
    </td>
        <td class="px-6 py-4">
        <div class="flex items-center gap-2">
            <div class="bg-purple-500/20 p-1 rounded">
                <i class="fas fa-cube text-purple-400 text-sm"></i>
            </div>
            <div class="text-sm">
                <p class="text-white font-medium">ApkMod Brutal 1.0</p>
                <p class="text-xs text-slate-400">Produto</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">09/09/2025</p>
            <p class="text-slate-400">01:52</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="text-sm">
            <p class="text-white">12/11/2025</p>
            <p class="text-slate-400">05:15</p>
        </div>
    </td>
    <td class="px-6 py-4">
        <span class="font-semibold text-green-400">
            9 dias        </span>
            </td>
    <td class="px-6 py-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
            <i class="fas fa-check-circle"></i>
            Ativo        </span>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center gap-2 flex-wrap">
            <!-- Botão Gerenciar -->
            <button onclick="abrirGerenciar('HG-RZWZZC')" 
                    class="bg-blue-500/20 hover:bg-blue-500/30 text-blue-400 px-3 py-2 rounded-lg text-sm transition-colors flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Gerenciar
            </button>
            
                            <!-- Ativo - pode banir ou pausar -->
                <div class="flex gap-1">
                    <button onclick="banirUsuario('HG-RZWZZC', 1)" 
                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Banir">
                        <i class="fas fa-ban"></i>
                    </button>
                    <button onclick="pausarUsuario('HG-RZWZZC')" 
                            class="bg-orange-500/20 hover:bg-orange-500/30 text-orange-400 px-2 py-2 rounded-lg text-sm transition-colors" 
                            title="Pausar">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
                        
            <!-- Botão Deletar -->
            <button onclick="deletarUsuario('HG-RZWZZC')" 
                    class="bg-red-600/20 hover:bg-red-600/30 text-red-300 px-2 py-2 rounded-lg text-sm transition-colors" 
                    title="Deletar Permanentemente">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>


            </tbody>
          </table>
        </div>
        
        <!-- Paginação -->
        <div id="paginationContainer" class="bg-[#334155] px-6 py-4 border-t border-slate-700">
          <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-sm text-slate-400" id="paginationInfo">
              Mostrando 1-10 de 358 Keys
            </div>
            <div class="flex items-center gap-2" id="paginationLinks">
                            
                              <a href="#" onclick="fetchUsers(1)" class="px-3 py-2 rounded-lg text-sm transition-colors bg-indigo-600 text-white">
                  1                </a>
                              <a href="#" onclick="fetchUsers(2)" class="px-3 py-2 rounded-lg text-sm transition-colors bg-slate-700 text-white hover:bg-slate-600">
                  2                </a>
                              <a href="#" onclick="fetchUsers(3)" class="px-3 py-2 rounded-lg text-sm transition-colors bg-slate-700 text-white hover:bg-slate-600">
                  3                </a>
                            
                              <a href="#" onclick="fetchUsers(2)" class="px-3 py-2 rounded-lg bg-slate-700 text-white hover:bg-slate-600 transition-colors">
                  <i class="fas fa-chevron-right"></i>
                </a>
                          </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

<!-- Modais - ORDEM IMPORTANTE: modal_gerenciar_usuario.php DEVE vir ANTES dos scripts -->

<!-- MODAL CRIAR USUÁRIO -->
<div id="modalCriarUsuario" class="hidden fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50">
  <div class="bg-[#1e293b] p-6 rounded-lg w-full max-w-md relative text-white shadow-2xl transform transition-all duration-300 scale-95 opacity-0" id="modalCriarUsuarioContent">
    <h3 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
      <i class="fas fa-user-plus text-indigo-400"></i>
      Gerar Nova Chave
    </h3>

    <form id="formCriarUsuario">
     
     

      <div class="mb-3">
        <label class="block text-sm font-medium text-slate-300 mb-1">
          <i class="fas fa-cube mr-2"></i>Produto e Versão: <span class="text-red-400">*</span>
        </label>
        <select name="produto" id="produtoVersao" class="w-full px-3 py-2 rounded-lg bg-[#0f172a] text-white border border-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200" required onchange="atualizarDiasValor()">
          <option value="">Selecione um produto</option>
                      <option value="ApkMod Brutal 1.0">ApkMod Brutal 1.0</option>
                  </select>
      </div>

      <div class="mb-3">
        <label class="block text-sm font-medium text-slate-300 mb-1">
          <i class="fas fa-calendar-alt mr-2"></i>Dias disponíveis: <span class="text-red-400">*</span>
        </label>
        <select name="dias_id" id="diasValor" class="w-full px-3 py-2 rounded-lg bg-[#0f172a] text-white border border-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200" required disabled>
          <option value="">Selecione o produto primeiro</option>
        </select>
      </div>

      <div class="bg-indigo-500/10 border border-indigo-500/30 rounded-lg p-3 mb-4">
        <div class="text-sm text-indigo-300">
          <i class="fas fa-wallet mr-2"></i>
          Saldo atual: <span class="text-green-400 font-semibold">R$ 0</span>
        </div>
        <div class="text-xs text-slate-400 mt-1">
          <i class="fas fa-info-circle mr-1"></i>
          Key será criada como <strong>inativa</strong> e <strong>pausada</strong>
        </div>
      </div>

      <div class="flex justify-between gap-3">
        <button type="submit" id="btnCriarUsuario" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center gap-2">
          <i class="fas fa-plus"></i>
          Criar
        </button>
        <button type="button" onclick="closeModal('modalCriarUsuario')" class="flex-1 bg-slate-600 hover:bg-slate-700 text-white px-4 py-2 rounded-lg transition-all duration-200">
          Cancelar
        </button>
      </div>
    </form>

    <button onclick="closeModal('modalCriarUsuario')" class="absolute top-2 right-3 text-slate-400 hover:text-red-400 text-xl transition-colors duration-200">&times;</button>
  </div>
</div>

<!-- ALERTA -->
<div id="alertModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60">
  <div id="alertBox" class="bg-[#1e293b] text-white px-6 py-4 rounded-lg shadow-lg text-center max-w-sm">
    <p id="alertMessage" class="text-sm"></p>
  </div>
</div>

<script>
const produtos = {"ApkMod Brutal 1.0":[{"id":12,"produto":"ApkMod Brutal","versao":"1.0","valor":"15.00","dias":1,"criado_em":"2025-08-08 14:33:39"},{"id":11,"produto":"ApkMod Brutal","versao":"1.0","valor":"25.00","dias":10,"criado_em":"2025-08-08 14:30:08"},{"id":13,"produto":"ApkMod Brutal","versao":"1.0","valor":"50.00","dias":20,"criado_em":"2025-08-08 14:35:51"},{"id":15,"produto":"ApkMod Brutal","versao":"1.0","valor":"70.00","dias":31,"criado_em":"2025-09-12 19:13:21"}]};

function atualizarDiasValor() {
  const produtoSelect = document.getElementById('produtoVersao');
  const diasSelect = document.getElementById('diasValor');
  diasSelect.innerHTML = '';
  diasSelect.disabled = true;

  const selectedProduct = produtoSelect.value;
  if (!selectedProduct) {
    diasSelect.innerHTML = '<option value="">Selecione o produto primeiro</option>';
    return;
  }

  if (produtos[selectedProduct]) {
    diasSelect.innerHTML = '<option value="">Selecione os dias</option>';
    produtos[selectedProduct].forEach(p => {
      const opt = document.createElement('option');
      opt.value = p.id;
      opt.textContent = `${p.dias} dias – R$${parseFloat(p.valor).toFixed(2).replace('.', ',')}`;
      diasSelect.appendChild(opt);
    });
    diasSelect.disabled = false;
  }
}

function showAlert(message, type = 'info') {
  const alertModal = document.getElementById('alertModal');
  const alertBox = document.getElementById('alertBox');
  const alertMessage = document.getElementById('alertMessage');
  
  alertMessage.textContent = message;
  
  // Definir cor baseada no tipo
  if (type === 'success') {
    alertBox.className = 'bg-green-600 text-white px-6 py-4 rounded-lg shadow-lg text-center max-w-sm';
  } else if (type === 'error') {
    alertBox.className = 'bg-red-600 text-white px-6 py-4 rounded-lg shadow-lg text-center max-w-sm';
  } else {
    alertBox.className = 'bg-[#1e293b] text-white px-6 py-4 rounded-lg shadow-lg text-center max-w-sm';
  }
  
  alertModal.classList.remove('hidden');
  
  // Auto-fechar após 3 segundos
  setTimeout(() => {
    alertModal.classList.add('hidden');
  }, 3000);
}

// Validação em tempo real
function validarCampos() {
  
  const produto = document.getElementById('produtoVersao').value;
  const dias = document.getElementById('diasValor').value;
  const btnCriar = document.getElementById('btnCriarUsuario');
  
  const todosPreenchidos = produto && dias;
  
  if (todosPreenchidos) {
    btnCriar.disabled = false;
    btnCriar.classList.remove('opacity-50', 'cursor-not-allowed');
  } else {
    btnCriar.disabled = true;
    btnCriar.classList.add('opacity-50', 'cursor-not-allowed');
  }
}

// Event listeners para validação em tempo real
document.addEventListener('DOMContentLoaded', function() {
  const produtoVersao = document.getElementById('produtoVersao');
  const diasValor = document.getElementById('diasValor');
  

  if (produtoVersao) produtoVersao.addEventListener('change', validarCampos);
  if (diasValor) diasValor.addEventListener('change', validarCampos);
  
  // Validação inicial
  validarCampos();
});

document.getElementById('formCriarUsuario').addEventListener('submit', async function(e) {
  e.preventDefault();
  
  // Validação final antes do envio
 
 
  const produto = document.getElementById('produtoVersao').value;
  const dias = document.getElementById('diasValor').value;
  

  

  
  if (!produto) {
    showAlert('Selecione um produto.', 'error');
    return;
  }
  
  if (!dias) {
    showAlert('Selecione os dias disponíveis.', 'error');
    return;
  }
  
  // Usar modal bonito de confirmação
  const diasTexto = document.getElementById('diasValor').selectedOptions[0].text;
  mostrarConfirmacao(
    'Gerar Nova Chave',
    `Tem certeza que deseja criar esta key com ${diasTexto}?`,
    () => {
      executarCriacaoUsuario(e.target);
    },
    null,
    'warning'
  );
  return;

});

// Função para executar criação de usuário
async function executarCriacaoUsuario(form) {
  const data = new FormData(form);
  
  // Log dos dados que estão sendo enviados (para debug)
  console.log('Dados sendo enviados:');
  for (let [key, value] of data.entries()) {
    console.log(key + ': ' + value);
  }

  try {
    const res = await fetch('criar_usuario.php', {
      method: 'POST',
      body: data
    });

    if (!res.ok) {
      throw new Error(`HTTP error! status: ${res.status}`);
    }

    const json = await res.json();
    
    if (json.success) {
      // Mostrar modal de sucesso com dados do usuário
      mostrarSucessoCriacaoUsuario(json.usuario_dados);
      
      // Limpar formulário
      form.reset();
      document.getElementById('diasValor').innerHTML = '<option value="">Selecione o produto primeiro</option>';
      document.getElementById('diasValor').disabled = true;
      validarCampos();
      
      closeModal('modalCriarUsuario');
    } else {
      mostrarErro(json.message);
    }

  } catch (err) {
    console.error('Erro na requisição:', err);
    mostrarErro('Erro ao criar usuário: ' + err.message);
  }
}

// Função para mostrar modal de sucesso com dados do usuário
function mostrarSucessoCriacaoUsuario(dadosUsuario) {
  // Criar modal de sucesso personalizado
  const modalHtml = `
    <div id="modalSucessoCriacaoUsuario" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-[80]">
      <div class="bg-gradient-to-br from-green-600 to-green-800 p-8 rounded-2xl max-w-md w-full mx-4 text-white shadow-2xl border border-green-400/30 relative overflow-hidden">
        
        <!-- Confete animado -->
        <div class="absolute inset-0 pointer-events-none">
          <div class="confetti"></div>
          <div class="confetti"></div>
          <div class="confetti"></div>
          <div class="confetti"></div>
          <div class="confetti"></div>
        </div>
        
        <!-- Ícone de sucesso -->
        <div class="text-center mb-6">
          <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 rounded-full mb-4 animate-bounce">
            <i class="fas fa-check text-4xl text-white"></i>
          </div>
          <h2 class="text-2xl font-bold">Key Criada com Sucesso!</h2>
        </div>
        
        <!-- Dados do usuário -->
        <div class="bg-white/10 rounded-lg p-4 mb-6 backdrop-blur-sm">
          <h3 class="text-lg font-semibold mb-3 text-center">📋 Dados da Key</h3>
          
          <div class="space-y-3">
            <div class="flex justify-between items-center bg-white/10 rounded p-2">
              <span class="font-medium">👤 Login:</span>
              <div class="flex items-center gap-2">
                <span id="loginCriado" class="font-mono bg-black/20 px-2 py-1 rounded">${dadosUsuario.login}</span>
                <button onclick="copiarTexto('${dadosUsuario.login}')" class="text-yellow-300 hover:text-yellow-100 transition-colors">
                  <i class="fas fa-copy"></i>
                </button>
              </div>
            </div>
            
            <div class="flex justify-between items-center bg-white/10 rounded p-2">
              <span class="font-medium">📅 Dias:</span>
              <div class="flex items-center gap-2">
                <span class="font-mono bg-black/20 px-2 py-1 rounded">${dadosUsuario.dias} dias</span>
              </div>
            </div>
          </div>
          
          <!-- Botão copiar tudo -->
          <button onclick="copiarTodosDados()" class="w-full mt-4 bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-2 px-4 rounded-lg transition-all duration-200 flex items-center justify-center gap-2">
            <i class="fas fa-clipboard"></i>
            Copiar Todos os Dados
          </button>
        </div>
        
        <!-- Botão confirmar -->
        <div class="text-center">
          <button id="btnConfirmarSucesso" class="bg-white/20 hover:bg-white/30 text-white px-8 py-3 rounded-lg transition-all duration-200 font-semibold">
            Confirmar
          </button>
        </div>
      </div>
    </div>
  `;
  
  // Adicionar modal ao body
  document.body.insertAdjacentHTML('beforeend', modalHtml);
  
  // Armazenar dados para função de cópia
  window.dadosUsuarioCriado = dadosUsuario;
  
  // Adicionar event listener diretamente após inserir o HTML
  const btnConfirmar = document.getElementById('btnConfirmarSucesso');
  if (btnConfirmar) {
    btnConfirmar.addEventListener('click', function() {
      console.log('Botão confirmar clicado!'); // Debug
      const modal = document.getElementById('modalSucessoCriacaoUsuario');
      if (modal) {
        modal.remove();
      }
      // Atualizar página para atualizar créditos
      window.location.reload();
    });
  } else {
    console.error('Botão confirmar não encontrado!'); // Debug
  }
}

// Função para copiar texto
function copiarTexto(texto) {
  navigator.clipboard.writeText(texto).then(() => {
    // Feedback visual rápido
    const toast = document.createElement('div');
    toast.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-[90] animate-pulse';
    toast.textContent = 'Copiado!';
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 2000);
  });
}

// Função para copiar todos os dados
function copiarTodosDados() {
  const dados = window.dadosUsuarioCriado;
  const texto = `Key: ${dados.login}\nDias: ${dados.dias} dias`;
  
  navigator.clipboard.writeText(texto).then(() => {
    // Feedback visual
    const toast = document.createElement('div');
    toast.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-[90] animate-pulse';
    toast.textContent = 'Todos os dados copiados!';
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 2000);
  });
}

// Função para fechar modal de sucesso
function fecharModalSucesso() {
  const modal = document.getElementById('modalSucessoCriacaoUsuario');
  if (modal) {
    modal.remove();
  }
  // Atualizar página para atualizar créditos
  window.location.reload();
}
</script>

<!-- CSS para animação de confete -->
<style>
.confetti {
  position: absolute;
  width: 10px;
  height: 10px;
  background: #f1c40f;
  animation: confetti-fall 3s linear infinite;
}

.confetti:nth-child(1) {
  left: 10%;
  animation-delay: 0s;
  background: #e74c3c;
}

.confetti:nth-child(2) {
  left: 30%;
  animation-delay: 0.5s;
  background: #3498db;
}

.confetti:nth-child(3) {
  left: 50%;
  animation-delay: 1s;
  background: #2ecc71;
}

.confetti:nth-child(4) {
  left: 70%;
  animation-delay: 1.5s;
  background: #9b59b6;
}

.confetti:nth-child(5) {
  left: 90%;
  animation-delay: 2s;
  background: #f39c12;
}

@keyframes confetti-fall {
  0% {
    transform: translateY(-100vh) rotate(0deg);
    opacity: 1;
  }
  100% {
    transform: translateY(100vh) rotate(720deg);
    opacity: 0;
  }
}
</style>

<!-- Modal Adicionar Dias (Versão Corrigida) -->
<div id="modalAdicionarDias" class="hidden fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50">
  <div class="bg-[#1e293b] p-6 rounded-lg w-full max-w-lg relative text-white shadow-2xl transform transition-all duration-300 scale-95 opacity-0" id="modalAdicionarDiasContent">
    <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
      <i class="fas fa-plus-circle text-blue-400"></i> Adicionar Dias
    </h2>

    <!-- Informações do Usuário -->
    <div class="mb-4 p-3 bg-blue-500/10 border border-blue-500/30 rounded-lg">
      <div class="grid grid-cols-2 gap-4 text-sm">
        <p class="text-blue-300">
          <i class="fas fa-user mr-2"></i>
          Usuário: <span id="usuarioDestinoNovo" class="font-semibold">-</span>
        </p>
        <p class="text-purple-300">
          <i class="fas fa-cube mr-2"></i>
          Produto: <span id="produtoUsuarioNovo" class="font-semibold">-</span>
        </p>
      </div>
    </div>

    <!-- Informações do Seller -->
    <div class="mb-4 p-3 bg-green-500/10 border border-green-500/30 rounded-lg">
      <p class="text-sm text-green-300">
        <i class="fas fa-wallet mr-2"></i>
        Seus créditos disponíveis: <span id="creditosDisponiveis" class="font-semibold text-green-400">R$ 0,00</span>
      </p>
    </div>

    <!-- Verificação de Produto -->
    <div id="verificacaoProduto" class="mb-4">
      <div id="produtoEncontrado" class="hidden p-3 bg-green-500/10 border border-green-500/30 rounded-lg">
        <h3 class="text-sm font-semibold mb-2 text-green-400">
          <i class="fas fa-check-circle mr-2"></i>Produto Verificado
        </h3>
        <p class="text-xs text-green-300 mb-2">
          Opções disponíveis para <span id="nomeProdutoVerificado" class="font-semibold"></span>:
        </p>
      </div>
      
      <div id="produtoNaoEncontrado" class="hidden p-3 bg-red-500/10 border border-red-500/30 rounded-lg">
        <h3 class="text-sm font-semibold mb-2 text-red-400">
          <i class="fas fa-exclamation-triangle mr-2"></i>Produto Não Encontrado
        </h3>
        <p class="text-xs text-red-300">
          Não foram encontradas opções de dias para este produto. Verifique se o produto está cadastrado corretamente.
        </p>
      </div>
    </div>

    <!-- Formulário de Adicionar Dias -->
    <form id="formAdicionarDiasNovo">
      <input type="hidden" name="acao" value="adicionar_dias_seller">
      <input type="hidden" name="usuario_destino" id="usuarioDestinoHidden">
      <input type="hidden" name="produto_nome" id="produtoNomeHidden">

      <!-- Select de Opções de Dias/Preço -->
      <div class="mb-4">
        <label class="block text-sm font-medium mb-2">Selecione o pacote de dias:</label>
        <select name="produto_id" id="selectOpcoesDias" class="w-full px-3 py-2 rounded bg-[#334155] border border-slate-600 text-white focus:border-blue-400 focus:outline-none" required disabled>
          <option value="">Verificando produto...</option>
        </select>
      </div>

      <!-- Resumo da Transação -->
      <div id="resumoTransacao" class="hidden mb-4 p-3 bg-slate-500/10 border border-slate-500/30 rounded-lg">
        <h3 class="text-sm font-semibold mb-2 text-slate-300">
          <i class="fas fa-receipt mr-2"></i>Resumo da Transação
        </h3>
        <div class="text-xs space-y-1">
          <div class="flex justify-between">
            <span>Dias a adicionar:</span>
            <span id="diasSelecionados" class="font-semibold">-</span>
          </div>
          <div class="flex justify-between">
            <span>Valor:</span>
            <span id="valorSelecionado" class="font-semibold">-</span>
          </div>
          <div class="flex justify-between border-t border-slate-600 pt-1 mt-2">
            <span>Créditos após transação:</span>
            <span id="creditosApos" class="font-semibold">-</span>
          </div>
        </div>
      </div>

      <!-- Aviso de Créditos Insuficientes -->
      <div id="avisoCreditos" class="hidden mb-4 p-3 bg-red-500/10 border border-red-500/30 rounded-lg">
        <div class="flex items-center gap-2">
          <i class="fas fa-exclamation-triangle text-red-400"></i>
          <span class="text-sm text-red-300">
            Créditos insuficientes! Faltam <span id="creditosFaltando" class="font-semibold">R$ 0,00</span>
          </span>
        </div>
      </div>

      <!-- Botões -->
      <div class="flex gap-3">
        <button type="button" data-close-modal="modalAdicionarDias" class="flex-1 bg-slate-600 hover:bg-slate-700 text-white px-4 py-2 rounded-lg transition-all duration-200">
          Cancelar
        </button>
        <button type="submit" id="btnConfirmarAdicao" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-all duration-200" disabled>
          <i class="fas fa-plus mr-1"></i> Adicionar Dias
        </button>
      </div>
    </form>

    <button data-close-modal="modalAdicionarDias" class="absolute top-2 right-3 text-slate-400 hover:text-red-400 text-xl transition-colors duration-200">
      &times;
    </button>
  </div>
</div>

<script>
// Dados dos produtos (assumindo que estão disponíveis no PHP)
const produtosDataNovo = [{"id":12,"produto":"ApkMod Brutal","versao":"1.0","valor":"15.00","dias":1,"criado_em":"2025-08-08 14:33:39"},{"id":11,"produto":"ApkMod Brutal","versao":"1.0","valor":"25.00","dias":10,"criado_em":"2025-08-08 14:30:08"},{"id":13,"produto":"ApkMod Brutal","versao":"1.0","valor":"50.00","dias":20,"criado_em":"2025-08-08 14:35:51"},{"id":15,"produto":"ApkMod Brutal","versao":"1.0","valor":"70.00","dias":31,"criado_em":"2025-09-12 19:13:21"}];
const creditosAtualNovo = 0;

// Função para verificar produto e popular opções
function verificarProdutoEPopularOpcoes(produtoUsuario) {

  const produtoEncontrado = document.getElementById("produtoEncontrado");
  const produtoNaoEncontrado = document.getElementById("produtoNaoEncontrado");
  const selectOpcoes = document.getElementById("selectOpcoesDias");
  const nomeProdutoVerificado = document.getElementById("nomeProdutoVerificado");
  
  // Resetar estado
  produtoEncontrado.classList.add("hidden");
  produtoNaoEncontrado.classList.add("hidden");
  selectOpcoes.innerHTML = '<option value="">Verificando produto...</option>';
  selectOpcoes.disabled = true;
  
  if (!produtoUsuario || produtoUsuario === "N/A") {
    produtoNaoEncontrado.classList.remove("hidden");
    selectOpcoes.innerHTML = '<option value="">Produto não identificado</option>';
    return;
  }
  
  // Filtrar produtos que correspondem ao produto do usuário
  const produtosFiltrados = produtosDataNovo.filter(p => {
    const nomeProdutoCompleto = `${p.produto} ${p.versao}`;
    return nomeProdutoCompleto === produtoUsuario;
  });
  

  if (produtosFiltrados.length > 0) {
    // Produto encontrado
    produtoEncontrado.classList.remove("hidden");
    nomeProdutoVerificado.textContent = produtoUsuario;
    
    // Popular select com opções
    selectOpcoes.innerHTML = '<option value="">Selecione uma opção...</option>';
    
    produtosFiltrados.forEach(produto => {
      const option = document.createElement("option");
      option.value = produto.id;
      option.dataset.dias = produto.dias;
      option.dataset.valor = produto.valor;
      option.dataset.produto = produto.produto;
      option.dataset.versao = produto.versao;
      option.textContent = `${produto.dias} dias - R$ ${parseFloat(produto.valor).toFixed(2).replace(".", ",")}`;
      selectOpcoes.appendChild(option);
    });
    
    selectOpcoes.disabled = false;

  } else {
    // Produto não encontrado
    produtoNaoEncontrado.classList.remove("hidden");
    selectOpcoes.innerHTML = '<option value="">Nenhuma opção disponível</option>';
  }
}

// Função para atualizar resumo da transação
function atualizarResumoTransacao() {
  const selectOpcoes = document.getElementById("selectOpcoesDias");
  const resumoTransacao = document.getElementById("resumoTransacao");
  const avisoCreditos = document.getElementById("avisoCreditos");
  const btnConfirmar = document.getElementById("btnConfirmarAdicao");
  
  const selectedOption = selectOpcoes.options[selectOpcoes.selectedIndex];
  
  if (selectOpcoes.value && selectedOption.dataset.dias) {
    const dias = parseInt(selectedOption.dataset.dias);
    const valor = parseFloat(selectedOption.dataset.valor);
    const creditosApos = creditosAtualNovo - valor;
    
    // Atualizar resumo
    document.getElementById("diasSelecionados").textContent = `${dias} dias`;
    document.getElementById("valorSelecionado").textContent = `R$ ${valor.toFixed(2).replace(".", ",")}`;
    document.getElementById("creditosApos").textContent = `R$ ${creditosApos.toFixed(2).replace(".", ",")}`;
    
    resumoTransacao.classList.remove("hidden");
    
    // Verificar créditos suficientes
    if (creditosAtualNovo >= valor) {
      avisoCreditos.classList.add("hidden");
      btnConfirmar.disabled = false;
      btnConfirmar.classList.remove("opacity-50", "cursor-not-allowed");
      document.getElementById("creditosApos").className = "font-semibold text-green-400";
    } else {
      const faltando = valor - creditosAtualNovo;
      document.getElementById("creditosFaltando").textContent = `R$ ${faltando.toFixed(2).replace(".", ",")}`;
      avisoCreditos.classList.remove("hidden");
      btnConfirmar.disabled = true;
      btnConfirmar.classList.add("opacity-50", "cursor-not-allowed");
      document.getElementById("creditosApos").className = "font-semibold text-red-400";
    }
  } else {
    resumoTransacao.classList.add("hidden");
    avisoCreditos.classList.add("hidden");
    btnConfirmar.disabled = true;
    btnConfirmar.classList.add("opacity-50", "cursor-not-allowed");
  }
}

// Função para abrir o modal de adicionar dias
function abrirModalAdicionarDias(username, produtoUsuario) {
  
  // Preencher informações do usuário
  document.getElementById("usuarioDestinoNovo").textContent = username;
  document.getElementById("produtoUsuarioNovo").textContent = produtoUsuario || "N/A";
  document.getElementById("usuarioDestinoHidden").value = username;
  document.getElementById("produtoNomeHidden").value = produtoUsuario || "";
  
  // Atualizar créditos disponíveis
  document.getElementById("creditosDisponiveis").textContent = `R$ ${creditosAtualNovo.toFixed(2).replace(".", ",")}`;
  
  // Verificar produto e popular opções
  verificarProdutoEPopularOpcoes(produtoUsuario);
  
  // Resetar resumo
  document.getElementById("resumoTransacao").classList.add("hidden");
  document.getElementById("avisoCreditos").classList.add("hidden");
  document.getElementById("btnConfirmarAdicao").disabled = true;
  
  // Abrir modal
  openModal("modalAdicionarDias");
}

// Event listeners
document.addEventListener("DOMContentLoaded", function() {
  
  // Event listener para mudança no select
  const selectOpcoes = document.getElementById("selectOpcoesDias");
  if (selectOpcoes) {
    selectOpcoes.addEventListener("change", atualizarResumoTransacao);
  }
  
  // Event listener para o formulário
  const formAdicionar = document.getElementById("formAdicionarDiasNovo");
  if (formAdicionar) {
    formAdicionar.addEventListener("submit", async function(e) {
      e.preventDefault();
      
      const formData = new FormData(this);
      const selectedOption = selectOpcoes.options[selectOpcoes.selectedIndex];
      const username = document.getElementById("usuarioDestinoNovo").textContent;
      const dias = selectedOption.dataset.dias;
      const valor = selectedOption.dataset.valor;
      
      // Adicionar dados do produto selecionado
      if (selectedOption && selectedOption.dataset.produto) {
        formData.append("produto", selectedOption.dataset.produto);
        formData.append("versao", selectedOption.dataset.versao);
        formData.append("dias", selectedOption.dataset.dias);
        formData.append("valor", selectedOption.dataset.valor);
      }
      
      // Usar modal bonito de confirmação
      mostrarConfirmacao(
        'Adicionar Dias',
        `Tem certeza que deseja adicionar ${dias} dias para o usuário "${username}" por R$ ${parseFloat(valor).toFixed(2).replace('.', ',')}?`,
        () => {
          executarAdicaoDias(formData);
        },
        null,
        'warning'
      );
    });
  }
  
});

// Função para executar adição de dias
async function executarAdicaoDias(formData) {
  try {
    const response = await fetch("scripts/seller_creditos.php", {
      method: "POST",
      body: formData
    });
    
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    
    const result = await response.json();
    
    if (result.success) {
      mostrarSucesso(result.message);
      closeModal("modalAdicionarDias");
      setTimeout(() => {
        if (typeof fetchUsers === 'function') {
          fetchUsers();
        } else {
          location.reload();
        }
      }, 1500);
    } else {
      mostrarErro(result.message || "Erro ao adicionar dias");
    }
  } catch (error) {
    console.error("Erro na requisição:", error);
    mostrarErro("Erro de conexão: " + error.message);
  }
}
</script>

<!-- Modal Gerenciar Usuário (Versão Final) -->
<div id="modalGerenciarUsuario" class="hidden fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50">
  <div class="bg-[#1e293b] p-6 rounded-lg w-full max-w-2xl relative text-white shadow-2xl transform transition-all duration-300 scale-95 opacity-0" id="modalGerenciarUsuarioContent">
    <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
      <i class="fas fa-user-cog text-indigo-400"></i> Gerenciar Usuário
    </h2>

    <div class="mb-4 p-3 bg-indigo-500/10 border border-indigo-500/30 rounded-lg">
      <div class="flex items-center justify-between">
        <p class="text-sm text-indigo-300">
          <i class="fas fa-user mr-2"></i>
          Usuário: <span id="usuarioSelecionado" class="font-semibold">-</span>
        </p>
        <p class="text-sm text-purple-300">
          <i class="fas fa-cube mr-2"></i>
          Produto: <span id="produtoAtual" class="font-semibold">-</span>
        </p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <!-- Alterar Senha -->
      <div class="bg-[#334155] p-4 rounded-lg">
        <h3 class="text-sm font-semibold mb-3 flex items-center gap-2">
          <i class="fas fa-key text-yellow-400"></i> Alterar Senha
        </h3>
        <form id="formAlterarSenhaGerenciar">
          <input type="hidden" name="acao" value="alterar_senha">
          <input type="hidden" name="username" id="usernameAlterarSenha">
          <div class="mb-2">
            <label class="block text-xs font-medium mb-1">Nova Senha:</label>
            <input type="password" name="nova_senha" class="w-full px-2 py-1 text-sm rounded bg-[#1e293b] border border-slate-600 text-white focus:border-yellow-400 focus:outline-none" required>
          </div>
          <button type="submit" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-lg transition-all duration-200">
            <i class="fas fa-edit mr-1"></i> Alterar
          </button>
        </form>
      </div>

      <!-- Reset HWID -->
      <div class="bg-[#334155] p-4 rounded-lg">
        <h3 class="text-sm font-semibold mb-3 flex items-center gap-2">
          <i class="fas fa-redo-alt text-purple-400"></i> Reset HWID
        </h3>
        <form id="formResetHwidGerenciar">
          <input type="hidden" name="acao" value="resetar_hwid">
          <input type="hidden" name="username" id="usernameResetHwid">
          <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition-all duration-200">
            <i class="fas fa-refresh mr-1"></i> Resetar HWID
          </button>
        </form>
      </div>

      <!-- Adicionar Dias - Botão para abrir modal específico -->
      <div class="bg-[#334155] p-4 rounded-lg">
        <h3 class="text-sm font-semibold mb-3 flex items-center gap-2">
          <i class="fas fa-wallet text-blue-400"></i> Adicionar Dias
        </h3>
        
        <!-- Informações do seller logado -->
        <div class="mb-3 p-2 bg-blue-500/10 border border-blue-500/30 rounded text-xs">
          <p class="text-blue-300">
            <i class="fas fa-wallet mr-1"></i>
            Seus créditos: <span class="font-semibold text-green-400">R$ 0,00</span>
          </p>
        </div>

        <!-- Exibir produto atual do usuário -->
        <div class="mb-3 p-2 bg-purple-500/10 border border-purple-500/30 rounded text-xs">
          <p class="text-purple-300">
            <i class="fas fa-cube mr-1"></i>
            Produto atual: <span id="produtoAtualDetalhado" class="font-semibold">-</span>
          </p>
        </div>

        <button type="button" id="btnAbrirModalDias" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-all duration-200 text-xs">
          <i class="fas fa-plus mr-1"></i> Adicionar Dias
        </button>
      </div>
    </div>

    <div class="flex justify-end mt-6">
      <button type="button" data-close-modal="modalGerenciarUsuario" class="bg-slate-600 hover:bg-slate-700 text-white px-6 py-2 rounded-lg transition-all duration-200">
        Fechar
      </button>
    </div>

    <button data-close-modal="modalGerenciarUsuario" class="absolute top-2 right-3 text-slate-400 hover:text-red-400 text-xl transition-colors duration-200">
      &times;
    </button>
  </div>
</div>

<script>
// Função melhorada para buscar o produto do usuário na tabela HTML
function getProductFromTable(username) {
  
  // Primeiro, vamos tentar encontrar a tabela
  let tableBody = document.getElementById("usuariosTableBody");
  if (!tableBody) {
    console.error("❌ Elemento #usuariosTableBody não encontrado! Tentando outros seletores...");
    
    // Tentar outros seletores comuns
    tableBody = document.querySelector("tbody");
    if (!tableBody) {
      tableBody = document.querySelector("table tbody");
    }
    if (!tableBody) {
      tableBody = document.querySelector(".table tbody");
    }
    
    if (!tableBody) {
      console.error("❌ Nenhuma tabela encontrada!");
      return null;
    } else {
    }
  } else {
  }
  
  const rows = tableBody.querySelectorAll("tr");
  
  if (rows.length === 0) {
    console.warn("❌ Nenhuma linha encontrada na tabela");
    return null;
  }

  // Analisar cada linha
  for (let i = 0; i < rows.length; i++) {
    const row = rows[i];
    const cells = row.querySelectorAll("td");
    
    if (cells.length === 0) {
      continue;
    }
    
    // Analisar primeira célula (username)
    if (cells[0]) {
      // Tentar diferentes seletores para o username
      const possibleUsernameSelectors = [
        "p.font-medium",
        "p",
        ".font-medium", 
        "span.font-medium",
        "span",
        "div",
        "strong",
        "b"
      ];
      
      let foundUsername = null;
      let usernameElement = null;
      
      for (const selector of possibleUsernameSelectors) {
        usernameElement = cells[0].querySelector(selector);
        if (usernameElement) {
          foundUsername = usernameElement.textContent.trim();
          break;
        }
      }
      
      // Se não encontrou com seletores, usar texto direto da célula
      if (!foundUsername) {
        foundUsername = cells[0].textContent.trim();
      }
      
      // Verificar se corresponde ao username procurado
      if (foundUsername === username) {
        
        // Analisar segunda célula (produto)
        if (cells.length > 1 && cells[1]) {
          // Tentar diferentes seletores para o produto
          const possibleProductSelectors = [
            "p.font-medium",
            "p",
            ".font-medium",
            "span.font-medium", 
            "span",
            "div",
            "strong",
            "b"
          ];
          
          let foundProduct = null;
          let productElement = null;
          
          for (const selector of possibleProductSelectors) {
            productElement = cells[1].querySelector(selector);
            if (productElement) {
              foundProduct = productElement.textContent.trim();
              break;
            }
          }
          
          // Se não encontrou com seletores, usar texto direto da célula
          if (!foundProduct) {
            foundProduct = cells[1].textContent.trim();
          }
          
          if (foundProduct) {
            return foundProduct;
          } else {
            console.warn("❌ Produto não encontrado na segunda célula");
          }
        } else {
          console.warn("❌ Segunda célula não encontrada");
        }
      }
    }
  }
  
  console.warn(`❌ PRODUTO NÃO ENCONTRADO para username: "${username}"`);
  return null;
}

// Função para abrir o modal de gerenciamento
function abrirGerenciar(username) {
  
  // Preencher campos básicos do modal
  document.getElementById("usuarioSelecionado").textContent = username;
  document.getElementById("usernameAlterarSenha").value = username;
  document.getElementById("usernameResetHwid").value = username;
  
  // Buscar e exibir produto do usuário
  const userProduct = getProductFromTable(username);
  document.getElementById("produtoAtual").textContent = userProduct || "N/A";
  document.getElementById("produtoAtualDetalhado").textContent = userProduct || "N/A";
  
  // Configurar botão de adicionar dias
  const btnAbrirModalDias = document.getElementById("btnAbrirModalDias");
  btnAbrirModalDias.onclick = function() {
    closeModal("modalGerenciarUsuario");
    // Verificar se a função abrirModalAdicionarDias existe
    if (typeof abrirModalAdicionarDias === 'function') {
      abrirModalAdicionarDias(username, userProduct);
    } else {
      alert("Modal de adicionar dias não está disponível. Verifique se o arquivo modal_adicionar_dias_novo.php foi incluído.");
    }
  };
  
  // Abrir o modal
  openModal("modalGerenciarUsuario");
}

// Event listeners
document.addEventListener("DOMContentLoaded", function() {
  
  // Formulário alterar senha
  const formSenha = document.getElementById("formAlterarSenhaGerenciar");
  if (formSenha) {
    formSenha.addEventListener("submit", async function(e) {
      e.preventDefault();
      
      const username = document.getElementById("usernameAlterarSenha").value;
      const novaSenha = this.querySelector('input[name="nova_senha"]').value;
      
      // Usar modal bonito de confirmação
      mostrarConfirmacao(
        'Alterar Senha',
        `Tem certeza que deseja alterar a senha do usuário "${username}"?`,
        () => {
          executarAlteracaoSenha(this);
        },
        null,
        'warning'
      );
    });
  }
  
  // Formulário reset HWID
  const formHwid = document.getElementById("formResetHwidGerenciar");
  if (formHwid) {
    formHwid.addEventListener("submit", async function(e) {
      e.preventDefault();
      
      const username = document.getElementById("usernameResetHwid").value;
      
      // Usar modal bonito de confirmação
      mostrarConfirmacao(
        'Resetar HWID',
        `Tem certeza que deseja resetar o HWID do usuário "${username}"?`,
        () => {
          executarResetHwid(this);
        },
        null,
        'warning'
      );
    });
  }
  
});

// Função para executar alteração de senha
async function executarAlteracaoSenha(form) {
  const formData = new FormData(form);
  try {
    const response = await fetch("scripts/seller_actions.php", { method: "POST", body: formData });
    const result = await response.json();
    if (result.success) { 
      mostrarSucesso(result.message);
      closeModal("modalGerenciarUsuario");
      setTimeout(() => {
        if (typeof fetchUsers === 'function') {
          fetchUsers();
        }
      }, 1500);
    } else { 
      mostrarErro(result.message || "Erro ao alterar senha");
    }
  } catch (error) { 
    mostrarErro("Erro de conexão: " + error.message);
  }
}

// Função para executar reset HWID
async function executarResetHwid(form) {
  const formData = new FormData(form);
  try {
    const response = await fetch("scripts/seller_actions.php", { method: "POST", body: formData });
    const result = await response.json();
    if (result.success) { 
      mostrarSucesso(result.message);
      closeModal("modalGerenciarUsuario");
      setTimeout(() => {
        if (typeof fetchUsers === 'function') {
          fetchUsers();
        }
      }, 1500);
    } else { 
      mostrarErro(result.message || "Erro ao resetar HWID");
    }
  } catch (error) { 
    mostrarErro("Erro de conexão: " + error.message);
  }
}
</script>


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
// Funções de modal - CORRIGIDAS
window.openModal = function(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    
    // Animar o conteúdo do modal
    setTimeout(() => {
      const modalContent = modal.querySelector('[id$="Content"]');
      if (modalContent) {
        modalContent.classList.add('modal-show');
      }
    }, 10);
  }
};

window.closeModal = function(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    const modalContent = modal.querySelector('[id$="Content"]');
    if (modalContent) {
      modalContent.classList.remove('modal-show');
    }
    
    setTimeout(() => {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    }, 300);
  }
};

// Event listeners para fechar modais
document.addEventListener('click', function(e) {
  if (e.target.hasAttribute('data-close-modal')) {
    window.closeModal(e.target.getAttribute('data-close-modal'));
  }
});

// Script para controle do sidebar mobile já está no sidebar.php

// REMOVIDA A FUNÇÃO abrirGerenciar DUPLICADA - ela agora está apenas no modal_gerenciar_usuario.php

// Função para adicionar dias
window.abrirAdicionarDias = function(username) {
  // A função real está no modal_adicionar_dias.php, apenas chamamos ela aqui
  // Certifique-se de que o script do modal_adicionar_dias.php esteja carregado
  if (typeof window.abrirModalAdicionarDias !== 'undefined') {
    window.abrirModalAdicionarDias(username);
  } else {
    console.error('Função abrirModalAdicionarDias não encontrada. Verifique a inclusão do modal_adicionar_dias.php');
    window.mostrarErro('Erro: Função de adicionar dias não carregada.');
  }
};

// Funções para gerenciar usuários - COM MODAIS BONITOS
window.banirUsuario = function(username, banType = 1) {
  const banText = banType === 2 ? 'banir permanentemente' : 'banir temporariamente';
  const titulo = banType === 2 ? 'Banir Permanentemente' : 'Banir Temporariamente';
  const mensagem = `Tem certeza que deseja ${banText} a key "${username}"?`;
  
  window.mostrarConfirmacao(titulo, mensagem, () => {
    executarBanimento(username, banType);
  }, null, 'danger');
};

function executarBanimento(username, banType) {
  fetch('scripts/user_actions.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `acao=banir&username=${encodeURIComponent(username)}&ban_type=${banType}`
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      window.mostrarSucesso(data.message);
      setTimeout(() => fetchUsers(), 1500);
    } else {
      window.mostrarErro(data.message || 'Erro ao banir usuário');
    }
  })
  .catch(error => {
    console.error('Erro:', error);
    window.mostrarErro('Erro de conexão');
  });
}

window.desbanirUsuario = function(username) {
  window.mostrarConfirmacao(
    'Desbanir Key', 
    `Tem certeza que deseja desbanir a key "${username}"?`, 
    () => {
      executarDesbanimento(username);
    }, 
    null, 
    'warning'
  );
};

function executarDesbanimento(username) {
  fetch('scripts/user_actions.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `acao=desbanir&username=${encodeURIComponent(username)}`
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      window.mostrarSucesso(data.message);
      setTimeout(() => fetchUsers(), 1500);
    } else {
      window.mostrarErro(data.message || 'Erro ao desbanir usuário');
    }
  })
  .catch(error => {
    console.error('Erro:', error);
    window.mostrarErro('Erro de conexão');
  });
}

window.pausarUsuario = function(username) {
  window.mostrarConfirmacao(
    'Pausar Key', 
    `Tem certeza que deseja pausar a key "${username}"? O tempo de acesso será pausado.`, 
    () => {
      executarPausamento(username);
    }, 
    null, 
    'warning'
  );
};

function executarPausamento(username) {
  fetch('scripts/user_actions.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `acao=pausar&username=${encodeURIComponent(username)}`
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      window.mostrarSucesso(data.message);
      setTimeout(() => fetchUsers(), 1500);
    } else {
      window.mostrarErro(data.message || 'Erro ao pausar usuário');
    }
  })
  .catch(error => {
    console.error('Erro:', error);
    window.mostrarErro('Erro de conexão');
  });
}

window.despausarUsuario = function(username) {
  window.mostrarConfirmacao(
    'Despausar Key', 
    `Tem certeza que deseja despausar a key "${username}"? O tempo de acesso será retomado.`, 
    () => {
      executarDespausamento(username);
    }, 
    null, 
    'warning'
  );
};

function executarDespausamento(username) {
  fetch('scripts/user_actions.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `acao=despausar&username=${encodeURIComponent(username)}`
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      window.mostrarSucesso(data.message);
      setTimeout(() => fetchUsers(), 1500);
    } else {
      window.mostrarErro(data.message || 'Erro ao despausar usuário');
    }
  })
  .catch(error => {
    console.error('Erro:', error);
    window.mostrarErro('Erro de conexão');
  });
}

window.deletarUsuario = function(username) {
  window.mostrarConfirmacao(
    '⚠️ DELETAR PERMANENTEMENTE',
    `ATENÇÃO: Tem certeza que deseja DELETAR PERMANENTEMENTE a key "${username}"?\n\nEsta ação não pode ser desfeita!`,
    () => {
      // Aguarda o modal anterior fechar antes de abrir o próximo
      window.fecharModalConfirmacao();
      setTimeout(() => {
        window.mostrarConfirmacao(
          '🚨 CONFIRMAÇÃO FINAL',
          `Confirme novamente: DELETAR a key "${username}"?\n\nEsta é uma ação IRREVERSÍVEL!`,
          () => {
            executarDelecao(username);
          },
          null,
          'danger'
        );
      }, 350); // delay suficiente para animação do modal anterior terminar
    },
    null,
    'danger'
  );
};

function executarDelecao(username) {
  fetch('scripts/user_actions.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `acao=deletar&username=${encodeURIComponent(username)}`
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      window.mostrarSucesso(data.message);
      setTimeout(() => fetchUsers(), 1500);
    } else {
      window.mostrarErro(data.message || 'Erro ao deletar usuário');
    }
  })
  .catch(error => {
    console.error('Erro:', error);
    window.mostrarErro('Erro de conexão');
  });
}

// Função para buscar usuários via AJAX - CORRIGIDA
function fetchUsers(page = 1) {
    const search = document.getElementById('searchInput')?.value || '';
    const status = document.getElementById('statusSelect')?.value || '';
    const limit = document.getElementById('limitSelect')?.value || '10';

    const params = new URLSearchParams({
        page: page,
        search: search,
        status: status,
        limit: limit
    });

    // Mostrar loading
    const tableBody = document.getElementById('usuariosTableBody');
    if (tableBody) {
        tableBody.innerHTML = '<tr><td colspan="7" class="text-center py-8"><i class="fas fa-spinner fa-spin mr-2"></i>Carregando...</td></tr>';
    }

    fetch(`usuarios.php?${params.toString()}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro na resposta do servidor');
        }
        return response.json();
    })
    .then(data => {
        // Atualizar tabela
        if (tableBody && data.table) {
            tableBody.innerHTML = data.table;
        }
        
        // Atualizar estatísticas
        const totalStat = document.getElementById('totalUsuariosStat');
        const inativosStat = document.getElementById('usuariosInativosStat');
        const ativosStat = document.getElementById('usuariosAtivosStat');
        const expiradosStat = document.getElementById('usuariosExpiradosStat');
        const banidosStat = document.getElementById('usuariosBanidosStat');
        const pausadosStat = document.getElementById('usuariosPausadosStat');
        
        if (totalStat) totalStat.innerText = data.totalUsuarios || 0;
        if (inativosStat) inativosStat.innerText = data.usuariosInativos || 0;
        if (ativosStat) ativosStat.innerText = data.usuariosAtivos || 0;
        if (expiradosStat) expiradosStat.innerText = data.usuariosExpirados || 0;
        if (banidosStat) banidosStat.innerText = data.usuariosBanidos || 0;
        if (pausadosStat) pausadosStat.innerText = data.usuariosPausados || 0;
        
        // Atualizar informações de paginação
        const totalUsuarios = data.totalUsuarios || 0;
        const offset = (page - 1) * parseInt(limit);
        const paginationInfo = `Mostrando ${Math.min(offset + 1, totalUsuarios)}-${Math.min(offset + parseInt(limit), totalUsuarios)} de ${totalUsuarios} keys`;
        
        const paginationInfoEl = document.getElementById('paginationInfo');
        if (paginationInfoEl) paginationInfoEl.innerText = paginationInfo;

        // Atualizar links de paginação
        const totalPages = data.totalPages || 1;
        const currentPage = data.currentPage || page;
        
        let paginationLinksHtml = '';
        
        // Botão de página anterior
        if (currentPage > 1) {
            paginationLinksHtml += `<a href="#" onclick="fetchUsers(${currentPage - 1})" class="px-3 py-2 rounded-lg bg-slate-700 text-white hover:bg-slate-600 transition-colors">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>`;
        }
        
        // Números das páginas
        const startPage = Math.max(1, currentPage - 2);
        const endPage = Math.min(totalPages, currentPage + 2);
        
        for (let i = startPage; i <= endPage; i++) {
            paginationLinksHtml += `<a href="#" onclick="fetchUsers(${i})" class="px-3 py-2 rounded-lg text-sm transition-colors ${i == currentPage ? 'bg-indigo-600 text-white' : 'bg-slate-700 text-white hover:bg-slate-600'}">
                                        ${i}
                                    </a>`;
        }
        
        // Botão de próxima página
        if (currentPage < totalPages) {
            paginationLinksHtml += `<a href="#" onclick="fetchUsers(${currentPage + 1})" class="px-3 py-2 rounded-lg bg-slate-700 text-white hover:bg-slate-600 transition-colors">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>`;
        }
        
        const paginationLinksEl = document.getElementById('paginationLinks');
        if (paginationLinksEl) paginationLinksEl.innerHTML = paginationLinksHtml;

    })
    .catch(error => {
        console.error('Erro ao buscar usuários:', error);
        if (tableBody) {
            tableBody.innerHTML = '<tr><td colspan="7" class="text-center py-8 text-red-400"><i class="fas fa-exclamation-triangle mr-2"></i>Erro ao carregar dados</td></tr>';
        }
    });
}

// Aplicar filtros automaticamente quando os campos mudarem
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusSelect = document.getElementById('statusSelect');
    const limitSelect = document.getElementById('limitSelect');
    
    // Debounce para o campo de busca
    let searchTimeout;
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                fetchUsers(1); // Voltar para a primeira página ao buscar
            }, 500);
        });
    }
    
    // Aplicar filtros imediatamente para selects
    if (statusSelect) {
        statusSelect.addEventListener('change', () => fetchUsers(1));
    }
    
    if (limitSelect) {
        limitSelect.addEventListener('change', () => fetchUsers(1));
    }
    
    // Carregar dados iniciais
    fetchUsers(1);
});

</script>


<!-- MODAL CRIAR USUÁRIO -->
<div id="modalCriarUsuario" class="hidden fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50">
  <div class="bg-[#1e293b] p-6 rounded-lg w-full max-w-md relative text-white shadow-2xl transform transition-all duration-300 scale-95 opacity-0" id="modalCriarUsuarioContent">
    <h3 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
      <i class="fas fa-user-plus text-indigo-400"></i>
      Gerar Nova Chave
    </h3>

    <form id="formCriarUsuario">
     
     

      <div class="mb-3">
        <label class="block text-sm font-medium text-slate-300 mb-1">
          <i class="fas fa-cube mr-2"></i>Produto e Versão: <span class="text-red-400">*</span>
        </label>
        <select name="produto" id="produtoVersao" class="w-full px-3 py-2 rounded-lg bg-[#0f172a] text-white border border-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200" required onchange="atualizarDiasValor()">
          <option value="">Selecione um produto</option>
                      <option value="ApkMod Brutal 1.0">ApkMod Brutal 1.0</option>
                  </select>
      </div>

      <div class="mb-3">
        <label class="block text-sm font-medium text-slate-300 mb-1">
          <i class="fas fa-calendar-alt mr-2"></i>Dias disponíveis: <span class="text-red-400">*</span>
        </label>
        <select name="dias_id" id="diasValor" class="w-full px-3 py-2 rounded-lg bg-[#0f172a] text-white border border-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200" required disabled>
          <option value="">Selecione o produto primeiro</option>
        </select>
      </div>

      <div class="bg-indigo-500/10 border border-indigo-500/30 rounded-lg p-3 mb-4">
        <div class="text-sm text-indigo-300">
          <i class="fas fa-wallet mr-2"></i>
          Saldo atual: <span class="text-green-400 font-semibold">R$ 0</span>
        </div>
        <div class="text-xs text-slate-400 mt-1">
          <i class="fas fa-info-circle mr-1"></i>
          Key será criada como <strong>inativa</strong> e <strong>pausada</strong>
        </div>
      </div>

      <div class="flex justify-between gap-3">
        <button type="submit" id="btnCriarUsuario" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center gap-2">
          <i class="fas fa-plus"></i>
          Criar
        </button>
        <button type="button" onclick="closeModal('modalCriarUsuario')" class="flex-1 bg-slate-600 hover:bg-slate-700 text-white px-4 py-2 rounded-lg transition-all duration-200">
          Cancelar
        </button>
      </div>
    </form>

    <button onclick="closeModal('modalCriarUsuario')" class="absolute top-2 right-3 text-slate-400 hover:text-red-400 text-xl transition-colors duration-200">&times;</button>
  </div>
</div>

<!-- ALERTA -->
<div id="alertModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60">
  <div id="alertBox" class="bg-[#1e293b] text-white px-6 py-4 rounded-lg shadow-lg text-center max-w-sm">
    <p id="alertMessage" class="text-sm"></p>
  </div>
</div>

<script>
const produtos = {"ApkMod Brutal 1.0":[{"id":12,"produto":"ApkMod Brutal","versao":"1.0","valor":"15.00","dias":1,"criado_em":"2025-08-08 14:33:39"},{"id":11,"produto":"ApkMod Brutal","versao":"1.0","valor":"25.00","dias":10,"criado_em":"2025-08-08 14:30:08"},{"id":13,"produto":"ApkMod Brutal","versao":"1.0","valor":"50.00","dias":20,"criado_em":"2025-08-08 14:35:51"},{"id":15,"produto":"ApkMod Brutal","versao":"1.0","valor":"70.00","dias":31,"criado_em":"2025-09-12 19:13:21"}]};

function atualizarDiasValor() {
  const produtoSelect = document.getElementById('produtoVersao');
  const diasSelect = document.getElementById('diasValor');
  diasSelect.innerHTML = '';
  diasSelect.disabled = true;

  const selectedProduct = produtoSelect.value;
  if (!selectedProduct) {
    diasSelect.innerHTML = '<option value="">Selecione o produto primeiro</option>';
    return;
  }

  if (produtos[selectedProduct]) {
    diasSelect.innerHTML = '<option value="">Selecione os dias</option>';
    produtos[selectedProduct].forEach(p => {
      const opt = document.createElement('option');
      opt.value = p.id;
      opt.textContent = `${p.dias} dias – R$${parseFloat(p.valor).toFixed(2).replace('.', ',')}`;
      diasSelect.appendChild(opt);
    });
    diasSelect.disabled = false;
  }
}

function showAlert(message, type = 'info') {
  const alertModal = document.getElementById('alertModal');
  const alertBox = document.getElementById('alertBox');
  const alertMessage = document.getElementById('alertMessage');
  
  alertMessage.textContent = message;
  
  // Definir cor baseada no tipo
  if (type === 'success') {
    alertBox.className = 'bg-green-600 text-white px-6 py-4 rounded-lg shadow-lg text-center max-w-sm';
  } else if (type === 'error') {
    alertBox.className = 'bg-red-600 text-white px-6 py-4 rounded-lg shadow-lg text-center max-w-sm';
  } else {
    alertBox.className = 'bg-[#1e293b] text-white px-6 py-4 rounded-lg shadow-lg text-center max-w-sm';
  }
  
  alertModal.classList.remove('hidden');
  
  // Auto-fechar após 3 segundos
  setTimeout(() => {
    alertModal.classList.add('hidden');
  }, 3000);
}

// Validação em tempo real
function validarCampos() {
  
  const produto = document.getElementById('produtoVersao').value;
  const dias = document.getElementById('diasValor').value;
  const btnCriar = document.getElementById('btnCriarUsuario');
  
  const todosPreenchidos = produto && dias;
  
  if (todosPreenchidos) {
    btnCriar.disabled = false;
    btnCriar.classList.remove('opacity-50', 'cursor-not-allowed');
  } else {
    btnCriar.disabled = true;
    btnCriar.classList.add('opacity-50', 'cursor-not-allowed');
  }
}

// Event listeners para validação em tempo real
document.addEventListener('DOMContentLoaded', function() {
  const produtoVersao = document.getElementById('produtoVersao');
  const diasValor = document.getElementById('diasValor');
  

  if (produtoVersao) produtoVersao.addEventListener('change', validarCampos);
  if (diasValor) diasValor.addEventListener('change', validarCampos);
  
  // Validação inicial
  validarCampos();
});

document.getElementById('formCriarUsuario').addEventListener('submit', async function(e) {
  e.preventDefault();
  
  // Validação final antes do envio
 
 
  const produto = document.getElementById('produtoVersao').value;
  const dias = document.getElementById('diasValor').value;
  

  

  
  if (!produto) {
    showAlert('Selecione um produto.', 'error');
    return;
  }
  
  if (!dias) {
    showAlert('Selecione os dias disponíveis.', 'error');
    return;
  }
  
  // Usar modal bonito de confirmação
  const diasTexto = document.getElementById('diasValor').selectedOptions[0].text;
  mostrarConfirmacao(
    'Gerar Nova Chave',
    `Tem certeza que deseja criar esta key com ${diasTexto}?`,
    () => {
      executarCriacaoUsuario(e.target);
    },
    null,
    'warning'
  );
  return;

});

// Função para executar criação de usuário
async function executarCriacaoUsuario(form) {
  const data = new FormData(form);
  
  // Log dos dados que estão sendo enviados (para debug)
  console.log('Dados sendo enviados:');
  for (let [key, value] of data.entries()) {
    console.log(key + ': ' + value);
  }

  try {
    const res = await fetch('criar_usuario.php', {
      method: 'POST',
      body: data
    });

    if (!res.ok) {
      throw new Error(`HTTP error! status: ${res.status}`);
    }

    const json = await res.json();
    
    if (json.success) {
      // Mostrar modal de sucesso com dados do usuário
      mostrarSucessoCriacaoUsuario(json.usuario_dados);
      
      // Limpar formulário
      form.reset();
      document.getElementById('diasValor').innerHTML = '<option value="">Selecione o produto primeiro</option>';
      document.getElementById('diasValor').disabled = true;
      validarCampos();
      
      closeModal('modalCriarUsuario');
    } else {
      mostrarErro(json.message);
    }

  } catch (err) {
    console.error('Erro na requisição:', err);
    mostrarErro('Erro ao criar usuário: ' + err.message);
  }
}

// Função para mostrar modal de sucesso com dados do usuário
function mostrarSucessoCriacaoUsuario(dadosUsuario) {
  // Criar modal de sucesso personalizado
  const modalHtml = `
    <div id="modalSucessoCriacaoUsuario" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-[80]">
      <div class="bg-gradient-to-br from-green-600 to-green-800 p-8 rounded-2xl max-w-md w-full mx-4 text-white shadow-2xl border border-green-400/30 relative overflow-hidden">
        
        <!-- Confete animado -->
        <div class="absolute inset-0 pointer-events-none">
          <div class="confetti"></div>
          <div class="confetti"></div>
          <div class="confetti"></div>
          <div class="confetti"></div>
          <div class="confetti"></div>
        </div>
        
        <!-- Ícone de sucesso -->
        <div class="text-center mb-6">
          <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 rounded-full mb-4 animate-bounce">
            <i class="fas fa-check text-4xl text-white"></i>
          </div>
          <h2 class="text-2xl font-bold">Key Criada com Sucesso!</h2>
        </div>
        
        <!-- Dados do usuário -->
        <div class="bg-white/10 rounded-lg p-4 mb-6 backdrop-blur-sm">
          <h3 class="text-lg font-semibold mb-3 text-center">📋 Dados da Key</h3>
          
          <div class="space-y-3">
            <div class="flex justify-between items-center bg-white/10 rounded p-2">
              <span class="font-medium">👤 Login:</span>
              <div class="flex items-center gap-2">
                <span id="loginCriado" class="font-mono bg-black/20 px-2 py-1 rounded">${dadosUsuario.login}</span>
                <button onclick="copiarTexto('${dadosUsuario.login}')" class="text-yellow-300 hover:text-yellow-100 transition-colors">
                  <i class="fas fa-copy"></i>
                </button>
              </div>
            </div>
            
            <div class="flex justify-between items-center bg-white/10 rounded p-2">
              <span class="font-medium">📅 Dias:</span>
              <div class="flex items-center gap-2">
                <span class="font-mono bg-black/20 px-2 py-1 rounded">${dadosUsuario.dias} dias</span>
              </div>
            </div>
          </div>
          
          <!-- Botão copiar tudo -->
          <button onclick="copiarTodosDados()" class="w-full mt-4 bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-2 px-4 rounded-lg transition-all duration-200 flex items-center justify-center gap-2">
            <i class="fas fa-clipboard"></i>
            Copiar Todos os Dados
          </button>
        </div>
        
        <!-- Botão confirmar -->
        <div class="text-center">
          <button id="btnConfirmarSucesso" class="bg-white/20 hover:bg-white/30 text-white px-8 py-3 rounded-lg transition-all duration-200 font-semibold">
            Confirmar
          </button>
        </div>
      </div>
    </div>
  `;
  
  // Adicionar modal ao body
  document.body.insertAdjacentHTML('beforeend', modalHtml);
  
  // Armazenar dados para função de cópia
  window.dadosUsuarioCriado = dadosUsuario;
  
  // Adicionar event listener diretamente após inserir o HTML
  const btnConfirmar = document.getElementById('btnConfirmarSucesso');
  if (btnConfirmar) {
    btnConfirmar.addEventListener('click', function() {
      console.log('Botão confirmar clicado!'); // Debug
      const modal = document.getElementById('modalSucessoCriacaoUsuario');
      if (modal) {
        modal.remove();
      }
      // Atualizar página para atualizar créditos
      window.location.reload();
    });
  } else {
    console.error('Botão confirmar não encontrado!'); // Debug
  }
}

// Função para copiar texto
function copiarTexto(texto) {
  navigator.clipboard.writeText(texto).then(() => {
    // Feedback visual rápido
    const toast = document.createElement('div');
    toast.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-[90] animate-pulse';
    toast.textContent = 'Copiado!';
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 2000);
  });
}

// Função para copiar todos os dados
function copiarTodosDados() {
  const dados = window.dadosUsuarioCriado;
  const texto = `Key: ${dados.login}\nDias: ${dados.dias} dias`;
  
  navigator.clipboard.writeText(texto).then(() => {
    // Feedback visual
    const toast = document.createElement('div');
    toast.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-[90] animate-pulse';
    toast.textContent = 'Todos os dados copiados!';
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 2000);
  });
}

// Função para fechar modal de sucesso
function fecharModalSucesso() {
  const modal = document.getElementById('modalSucessoCriacaoUsuario');
  if (modal) {
    modal.remove();
  }
  // Atualizar página para atualizar créditos
  window.location.reload();
}
</script>

<!-- CSS para animação de confete -->
<style>
.confetti {
  position: absolute;
  width: 10px;
  height: 10px;
  background: #f1c40f;
  animation: confetti-fall 3s linear infinite;
}

.confetti:nth-child(1) {
  left: 10%;
  animation-delay: 0s;
  background: #e74c3c;
}

.confetti:nth-child(2) {
  left: 30%;
  animation-delay: 0.5s;
  background: #3498db;
}

.confetti:nth-child(3) {
  left: 50%;
  animation-delay: 1s;
  background: #2ecc71;
}

.confetti:nth-child(4) {
  left: 70%;
  animation-delay: 1.5s;
  background: #9b59b6;
}

.confetti:nth-child(5) {
  left: 90%;
  animation-delay: 2s;
  background: #f39c12;
}

@keyframes confetti-fall {
  0% {
    transform: translateY(-100vh) rotate(0deg);
    opacity: 1;
  }
  100% {
    transform: translateY(100vh) rotate(720deg);
    opacity: 0;
  }
}
</style>


<!-- MODAL GERAR USUÁRIOS EM LOTE -->
<div id="modalGerarUsuariosLote" class="hidden fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50">
  <div class="bg-[#1e293b] p-6 rounded-lg w-full max-w-md relative text-white shadow-2xl transform transition-all duration-300 scale-95 opacity-0" id="modalGerarUsuariosLoteContent">
    <h3 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
      <i class="fas fa-users text-indigo-400"></i>
      Gerar Usuários em Lote
    </h3>

    <form id="formGerarUsuariosLote">
      <div class="mb-3">
        <label class="block text-sm font-medium text-slate-300 mb-1">
          <i class="fas fa-hashtag mr-2"></i>Quantidade: <span class="text-red-400">*</span>
        </label>
        <input type="number" name="quantidade" id="inputQuantidade" min="1" max="100" value="5" class="w-full px-3 py-2 rounded-lg bg-[#0f172a] text-white border border-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200" required>
        <div class="text-xs text-slate-400 mt-1">Máximo 100 usuários por vez</div>
      </div>

      <div class="mb-3">
        <label class="block text-sm font-medium text-slate-300 mb-1">
          <i class="fas fa-cube mr-2"></i>Produto e Versão: <span class="text-red-400">*</span>
        </label>
        <select name="produto" id="produtoVersaoLote" class="w-full px-3 py-2 rounded-lg bg-[#0f172a] text-white border border-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200" required onchange="atualizarDiasValorLote()">
          <option value="">Selecione um produto</option>
                      <option value="ApkMod Brutal 1.0">ApkMod Brutal 1.0</option>
                  </select>
      </div>

      <div class="mb-3">
        <label class="block text-sm font-medium text-slate-300 mb-1">
          <i class="fas fa-calendar-alt mr-2"></i>Dias disponíveis: <span class="text-red-400">*</span>
        </label>
        <select name="dias_id" id="diasValorLote" class="w-full px-3 py-2 rounded-lg bg-[#0f172a] text-white border border-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200" required disabled>
          <option value="">Selecione o produto primeiro</option>
        </select>
      </div>

      <div class="bg-indigo-500/10 border border-indigo-500/30 rounded-lg p-3 mb-4">
        <div class="text-sm text-indigo-300">
          <i class="fas fa-wallet mr-2"></i>
          Saldo atual: <span class="text-green-400 font-semibold">R$ 0</span>
        </div>
        <div class="text-sm text-yellow-300 mt-1" id="custoTotalLote">
          <i class="fas fa-calculator mr-2"></i>
          Custo total: <span class="font-semibold">R$ 0,00</span>
        </div>
        <div class="text-xs text-slate-400 mt-1">
          <i class="fas fa-info-circle mr-1"></i>
          Usuários serão criados como <strong>inativos</strong> e <strong>pausados</strong>
        </div>
      </div>

      <div class="flex justify-between gap-3">
        <button type="submit" id="btnGerarUsuariosLote" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center gap-2">
          <i class="fas fa-magic"></i>
          Gerar
        </button>
        <button type="button" onclick="closeModal('modalGerarUsuariosLote')" class="flex-1 bg-slate-600 hover:bg-slate-700 text-white px-4 py-2 rounded-lg transition-all duration-200">
          Cancelar
        </button>
      </div>
    </form>

    <button onclick="closeModal('modalGerarUsuariosLote')" class="absolute top-2 right-3 text-slate-400 hover:text-red-400 text-xl transition-colors duration-200">&times;</button>
  </div>
</div>

<!-- MODAL DE CARREGAMENTO -->
<div id="modalCarregamento" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-[60]">
  <div class="bg-[#1e293b] p-8 rounded-xl text-white text-center shadow-2xl border border-indigo-500/30">
    <div class="mb-6">
      <!-- Spinner animado -->
      <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-500/20 rounded-full mb-4">
        <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-indigo-400"></div>
      </div>
      <h3 class="text-xl font-bold text-indigo-300 mb-2">Gerando Usuários...</h3>
      <p class="text-slate-400">Por favor, aguarde enquanto criamos os usuários</p>
    </div>
    
    <!-- Barra de progresso animada -->
    <div class="w-64 bg-slate-700 rounded-full h-2 mb-4">
      <div class="bg-gradient-to-r from-indigo-500 to-purple-500 h-2 rounded-full animate-pulse" style="width: 100%"></div>
    </div>
    
    <!-- Informações do processo -->
    <div class="text-sm text-slate-300">
      <p id="statusCarregamento">Preparando geração...</p>
      <p class="text-xs text-slate-500 mt-2">⚡ Gerando logins e senhas aleatórios</p>
    </div>
  </div>
</div>

<!-- MODAL RESULTADO GERAÇÃO EM LOTE -->
<div id="modalResultadoLote" class="hidden fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50">
  <div class="bg-[#1e293b] p-6 rounded-lg w-full max-w-4xl relative text-white shadow-2xl transform transition-all duration-300 scale-95 opacity-0" id="modalResultadoLoteContent">
    <h3 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
      <i class="fas fa-check-circle text-green-400"></i>
      Usuários Gerados com Sucesso!
    </h3>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <!-- Informações do lote -->
      <div class="bg-[#0f172a] rounded-lg p-4">
        <h4 class="text-md font-semibold mb-3 text-indigo-300">📊 Informações do Lote</h4>
        <div class="space-y-2 text-sm">
          <div class="flex justify-between">
            <span class="text-slate-400">Quantidade:</span>
            <span id="infoQuantidade" class="font-semibold">-</span>
          </div>
          <div class="flex justify-between">
            <span class="text-slate-400">Produto:</span>
            <span id="infoProduto" class="font-semibold">-</span>
          </div>
          <div class="flex justify-between">
            <span class="text-slate-400">Dias:</span>
            <span id="infoDias" class="font-semibold">-</span>
          </div>
          <div class="flex justify-between">
            <span class="text-slate-400">Custo Total:</span>
            <span id="infoCustoTotal" class="font-semibold text-red-400">-</span>
          </div>
        </div>
      </div>

      <!-- Ações -->
      <div class="bg-[#0f172a] rounded-lg p-4">
        <h4 class="text-md font-semibold mb-3 text-indigo-300">⚡ Ações Rápidas</h4>
        <div class="space-y-2">
          <button onclick="copiarTodosUsuarios()" class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center gap-2">
            <i class="fas fa-clipboard"></i>
            Copiar Todos (Linha por Linha)
          </button>
          <button onclick="copiarFormatoEmoji()" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center gap-2">
            <i class="fas fa-smile"></i>
            Copiar com Emojis
          </button>
          <button onclick="baixarTxt()" class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center gap-2">
            <i class="fas fa-download"></i>
            Baixar TXT
          </button>
        </div>
      </div>
    </div>

    <!-- Lista de usuários -->
    <div class="mt-6">
      <h4 class="text-md font-semibold mb-3 text-indigo-300">👥 Usuários Gerados</h4>
      <div class="bg-[#0f172a] rounded-lg p-4 max-h-96 overflow-y-auto">
        <div id="listaUsuariosGerados" class="space-y-2 font-mono text-sm">
          <!-- Usuários serão inseridos aqui via JavaScript -->
        </div>
      </div>
    </div>

    <div class="flex justify-between gap-3 mt-6">
      <button id="btnFecharResultado" onclick="tentarFecharModalResultado()" class="flex-1 bg-slate-600 hover:bg-slate-700 text-white px-4 py-2 rounded-lg transition-all duration-200 opacity-50 cursor-not-allowed" disabled>
        <span id="textoFechar">Copie ou baixe os dados primeiro</span>
      </button>
    </div>

    <button onclick="tentarFecharModalResultado()" class="absolute top-2 right-3 text-slate-400 hover:text-red-400 text-xl transition-colors duration-200" id="btnFecharX">&times;</button>
  </div>
</div>

<script>
// Variável global para armazenar os usuários gerados
let usuariosGeradosGlobal = [];
// Variável para controlar se o usuário já copiou ou baixou os dados
let dadosCopiados = false;

// Função para atualizar dias e valor no modal de lote
function atualizarDiasValorLote() {
  const produtoSelect = document.getElementById('produtoVersaoLote');
  const diasSelect = document.getElementById('diasValorLote');
  diasSelect.innerHTML = '';
  diasSelect.disabled = true;

  const selectedProduct = produtoSelect.value;
  if (!selectedProduct) {
    diasSelect.innerHTML = '<option value="">Selecione o produto primeiro</option>';
    atualizarCustoTotal();
    return;
  }

  if (produtos[selectedProduct]) {
    diasSelect.innerHTML = '<option value="">Selecione os dias</option>';
    produtos[selectedProduct].forEach(p => {
      const opt = document.createElement('option');
      opt.value = p.id;
      opt.textContent = `${p.dias} dias – R$${parseFloat(p.valor).toFixed(2).replace('.', ',')}`;
      opt.setAttribute('data-valor', p.valor);
      diasSelect.appendChild(opt);
    });
    diasSelect.disabled = false;
  }
  atualizarCustoTotal();
}

// Função para atualizar o custo total
function atualizarCustoTotal() {
  const quantidade = parseInt(document.getElementById('inputQuantidade').value) || 0;
  const diasSelect = document.getElementById('diasValorLote');
  const custoTotalElement = document.getElementById('custoTotalLote');
  
  if (diasSelect.selectedIndex > 0) {
    const valorUnitario = parseFloat(diasSelect.selectedOptions[0].getAttribute('data-valor')) || 0;
    const custoTotal = quantidade * valorUnitario;
    custoTotalElement.innerHTML = `<i class="fas fa-calculator mr-2"></i>Custo total: <span class="font-semibold">R$ ${custoTotal.toFixed(2).replace('.', ',')}</span>`;
  } else {
    custoTotalElement.innerHTML = `<i class="fas fa-calculator mr-2"></i>Custo total: <span class="font-semibold">R$ 0,00</span>`;
  }
}

// Event listeners para atualizar custo total
document.addEventListener('DOMContentLoaded', function() {
  const inputQuantidade = document.getElementById('inputQuantidade');
  const diasValorLote = document.getElementById('diasValorLote');
  
  if (inputQuantidade) inputQuantidade.addEventListener('input', atualizarCustoTotal);
  if (diasValorLote) diasValorLote.addEventListener('change', atualizarCustoTotal);
});

// Submissão do formulário de geração em lote
document.getElementById('formGerarUsuariosLote').addEventListener('submit', async function(e) {
  e.preventDefault();
  
  const quantidade = parseInt(document.getElementById('inputQuantidade').value);
  const produto = document.getElementById('produtoVersaoLote').value;
  const dias = document.getElementById('diasValorLote').value;
  
  if (!quantidade || quantidade < 1 || quantidade > 100) {
    showAlert('Quantidade deve ser entre 1 e 100.', 'error');
    return;
  }
  
  if (!produto) {
    showAlert('Selecione um produto.', 'error');
    return;
  }
  
  if (!dias) {
    showAlert('Selecione os dias disponíveis.', 'error');
    return;
  }
  
  // Calcular custo total para confirmação
  const diasSelect = document.getElementById('diasValorLote');
  const valorUnitario = parseFloat(diasSelect.selectedOptions[0].getAttribute('data-valor')) || 0;
  const custoTotal = quantidade * valorUnitario;
  const diasTexto = diasSelect.selectedOptions[0].text;
  
  // Confirmação
  mostrarConfirmacao(
    'Gerar Usuários em Lote',
    `Tem certeza que deseja gerar ${quantidade} usuários com ${diasTexto}?\n\nCusto total: R$ ${custoTotal.toFixed(2).replace('.', ',')}`,
    () => {
      executarGeracaoLote(e.target);
    },
    null,
    'warning'
  );
});

// Função para executar geração em lote
async function executarGeracaoLote(form) {
  const data = new FormData(form);
  
  // Mostrar modal de carregamento
  mostrarModalCarregamento();
  
  try {
    // Atualizar status
    atualizarStatusCarregamento("Validando dados...");
    
    await new Promise(resolve => setTimeout(resolve, 500)); // Pequena pausa para UX
    
    atualizarStatusCarregamento("Gerando logins e senhas...");
    
    const res = await fetch('gerar_usuarios_lote.php', {
      method: 'POST',
      body: data
    });

    if (!res.ok) {
      throw new Error(`HTTP error! status: ${res.status}`);
    }

    atualizarStatusCarregamento("Criando usuários no banco...");
    
    const json = await res.json();
    
    // Esconder modal de carregamento
    esconderModalCarregamento();
    
    if (json.success) {
      // Armazenar dados globalmente
      usuariosGeradosGlobal = json.usuarios_criados;
      
      // Exibir modal de resultado
      exibirResultadoLote(json);
      
      // Fechar modal de geração
      closeModal('modalGerarUsuariosLote');
      
      // Limpar formulário
      form.reset();
      document.getElementById('diasValorLote').innerHTML = '<option value="">Selecione o produto primeiro</option>';
      document.getElementById('diasValorLote').disabled = true;
      atualizarCustoTotal();
      
    } else {
      mostrarErro(json.message);
    }

  } catch (err) {
    console.error('Erro na requisição:', err);
    esconderModalCarregamento();
    mostrarErro('Erro ao gerar usuários: ' + err.message);
  }
}

// Função para mostrar modal de carregamento
function mostrarModalCarregamento() {
  const modal = document.getElementById('modalCarregamento');
  modal.classList.remove('hidden');
  atualizarStatusCarregamento("Preparando geração...");
}

// Função para esconder modal de carregamento
function esconderModalCarregamento() {
  const modal = document.getElementById('modalCarregamento');
  modal.classList.add('hidden');
}

// Função para atualizar status do carregamento
function atualizarStatusCarregamento(status) {
  const statusElement = document.getElementById('statusCarregamento');
  if (statusElement) {
    statusElement.textContent = status;
  }
}

// Função para exibir resultado da geração em lote
function exibirResultadoLote(dados) {
  // Resetar controle de dados copiados
  dadosCopiados = false;
  atualizarBotaoFechar();
  
  // Preencher informações do lote
  document.getElementById('infoQuantidade').textContent = dados.usuarios_criados.length;
  document.getElementById('infoProduto').textContent = dados.produto;
  document.getElementById('infoDias').textContent = dados.dias + ' dias';
  document.getElementById('infoCustoTotal').textContent = 'R$ ' + dados.custo_total.toFixed(2).replace('.', ',');
  
  // Preencher lista de usuários
  const listaElement = document.getElementById('listaUsuariosGerados');
  listaElement.innerHTML = '';
  
  dados.usuarios_criados.forEach((usuario, index) => {
    const div = document.createElement('div');
    div.className = 'flex justify-between items-center bg-slate-800 rounded p-2 hover:bg-slate-700 transition-colors';
    div.innerHTML = `
      <span class="text-slate-300">${index + 1}.</span>
      <span class="text-blue-300">${usuario.login}</span>
      <button onclick="copiarUsuario('${usuario.login}')" class="text-yellow-400 hover:text-yellow-200 transition-colors">
        <i class="fas fa-copy"></i>
      </button>
    `;
    listaElement.appendChild(div);
  });
  
  // Mostrar modal
  const modal = document.getElementById('modalResultadoLote');
  const content = document.getElementById('modalResultadoLoteContent');
  modal.classList.remove('hidden');
  setTimeout(() => {
    content.classList.add('modal-show');
  }, 10);
}

// Função para copiar um usuário específico
function copiarUsuario(login,) {
  const texto = `${login}`;
  navigator.clipboard.writeText(texto).then(() => {
    showToast('Usuário copiado!', 'success');
  });
}

// Função para copiar todos os usuários (linha por linha)
function copiarTodosUsuarios() {
  const texto = usuariosGeradosGlobal.map(u => `${u.login}`).join('\n');
  navigator.clipboard.writeText(texto).then(() => {
    showToast('Todos os usuários copiados!', 'success');
    dadosCopiados = true;
    atualizarBotaoFechar();
  });
}

// Função para copiar no formato com emojis
function copiarFormatoEmoji() {
  const texto = usuariosGeradosGlobal.map(u => `👤${u.login}`).join('\n');
  navigator.clipboard.writeText(texto).then(() => {
    showToast('Usuários copiados com emojis!', 'success');
    dadosCopiados = true;
    atualizarBotaoFechar();
  });
}

// Função para baixar arquivo TXT
function baixarTxt() {
  const texto = usuariosGeradosGlobal.map(u => `${u.login}`).join('\n');
  const blob = new Blob([texto], { type: 'text/plain' });
  const url = window.URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url;
  a.download = `usuarios_gerados_${new Date().toISOString().slice(0, 10)}.txt`;
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
  window.URL.revokeObjectURL(url);
  showToast('Arquivo baixado!', 'success');
  dadosCopiados = true;
  atualizarBotaoFechar();
}

// Função para tentar fechar modal de resultado
function tentarFecharModalResultado() {
  if (!dadosCopiados) {
    showToast('Por favor, copie ou baixe os dados antes de fechar!', 'error');
    return;
  }
  fecharModalResultado();
}

// Função para atualizar o botão de fechar
function atualizarBotaoFechar() {
  const btnFechar = document.getElementById('btnFecharResultado');
  const textoFechar = document.getElementById('textoFechar');
  const btnFecharX = document.getElementById('btnFecharX');
  
  if (dadosCopiados) {
    btnFechar.disabled = false;
    btnFechar.classList.remove('opacity-50', 'cursor-not-allowed');
    btnFechar.classList.add('hover:bg-slate-700');
    textoFechar.textContent = 'Fechar';
    btnFecharX.classList.remove('opacity-50');
  } else {
    btnFechar.disabled = true;
    btnFechar.classList.add('opacity-50', 'cursor-not-allowed');
    btnFechar.classList.remove('hover:bg-slate-700');
    textoFechar.textContent = 'Copie ou baixe os dados primeiro';
    btnFecharX.classList.add('opacity-50');
  }
}

// Função para fechar modal de resultado
function fecharModalResultado() {
  const modal = document.getElementById('modalResultadoLote');
  const content = document.getElementById('modalResultadoLoteContent');
  content.classList.remove('modal-show');
  setTimeout(() => {
    modal.classList.add('hidden');
  }, 300);
  
  // Atualizar página para atualizar créditos e estatísticas
  window.location.reload();
}

// Função para mostrar toast
function showToast(message, type = 'info') {
  const toast = document.createElement('div');
  toast.className = `fixed top-4 right-4 px-4 py-2 rounded-lg shadow-lg z-[90] animate-pulse text-white`;
  
  if (type === 'success') {
    toast.className += ' bg-green-500';
  } else if (type === 'error') {
    toast.className += ' bg-red-500';
  } else {
    toast.className += ' bg-blue-500';
  }
  
  toast.textContent = message;
  document.body.appendChild(toast);
  setTimeout(() => toast.remove(), 3000);
}
</script>

<!-- Modal Gerenciar Usuário (Versão Final) -->
<div id="modalGerenciarUsuario" class="hidden fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50">
  <div class="bg-[#1e293b] p-6 rounded-lg w-full max-w-2xl relative text-white shadow-2xl transform transition-all duration-300 scale-95 opacity-0" id="modalGerenciarUsuarioContent">
    <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
      <i class="fas fa-user-cog text-indigo-400"></i> Gerenciar Usuário
    </h2>

    <div class="mb-4 p-3 bg-indigo-500/10 border border-indigo-500/30 rounded-lg">
      <div class="flex items-center justify-between">
        <p class="text-sm text-indigo-300">
          <i class="fas fa-user mr-2"></i>
          Usuário: <span id="usuarioSelecionado" class="font-semibold">-</span>
        </p>
        <p class="text-sm text-purple-300">
          <i class="fas fa-cube mr-2"></i>
          Produto: <span id="produtoAtual" class="font-semibold">-</span>
        </p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <!-- Alterar Senha -->
      <div class="bg-[#334155] p-4 rounded-lg">
        <h3 class="text-sm font-semibold mb-3 flex items-center gap-2">
          <i class="fas fa-key text-yellow-400"></i> Alterar Senha
        </h3>
        <form id="formAlterarSenhaGerenciar">
          <input type="hidden" name="acao" value="alterar_senha">
          <input type="hidden" name="username" id="usernameAlterarSenha">
          <div class="mb-2">
            <label class="block text-xs font-medium mb-1">Nova Senha:</label>
            <input type="password" name="nova_senha" class="w-full px-2 py-1 text-sm rounded bg-[#1e293b] border border-slate-600 text-white focus:border-yellow-400 focus:outline-none" required>
          </div>
          <button type="submit" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-lg transition-all duration-200">
            <i class="fas fa-edit mr-1"></i> Alterar
          </button>
        </form>
      </div>

      <!-- Reset HWID -->
      <div class="bg-[#334155] p-4 rounded-lg">
        <h3 class="text-sm font-semibold mb-3 flex items-center gap-2">
          <i class="fas fa-redo-alt text-purple-400"></i> Reset HWID
        </h3>
        <form id="formResetHwidGerenciar">
          <input type="hidden" name="acao" value="resetar_hwid">
          <input type="hidden" name="username" id="usernameResetHwid">
          <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition-all duration-200">
            <i class="fas fa-refresh mr-1"></i> Resetar HWID
          </button>
        </form>
      </div>

      <!-- Adicionar Dias - Botão para abrir modal específico -->
      <div class="bg-[#334155] p-4 rounded-lg">
        <h3 class="text-sm font-semibold mb-3 flex items-center gap-2">
          <i class="fas fa-wallet text-blue-400"></i> Adicionar Dias
        </h3>
        
        <!-- Informações do seller logado -->
        <div class="mb-3 p-2 bg-blue-500/10 border border-blue-500/30 rounded text-xs">
          <p class="text-blue-300">
            <i class="fas fa-wallet mr-1"></i>
            Seus créditos: <span class="font-semibold text-green-400">R$ 0,00</span>
          </p>
        </div>

        <!-- Exibir produto atual do usuário -->
        <div class="mb-3 p-2 bg-purple-500/10 border border-purple-500/30 rounded text-xs">
          <p class="text-purple-300">
            <i class="fas fa-cube mr-1"></i>
            Produto atual: <span id="produtoAtualDetalhado" class="font-semibold">-</span>
          </p>
        </div>

        <button type="button" id="btnAbrirModalDias" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-all duration-200 text-xs">
          <i class="fas fa-plus mr-1"></i> Adicionar Dias
        </button>
      </div>
    </div>

    <div class="flex justify-end mt-6">
      <button type="button" data-close-modal="modalGerenciarUsuario" class="bg-slate-600 hover:bg-slate-700 text-white px-6 py-2 rounded-lg transition-all duration-200">
        Fechar
      </button>
    </div>

    <button data-close-modal="modalGerenciarUsuario" class="absolute top-2 right-3 text-slate-400 hover:text-red-400 text-xl transition-colors duration-200">
      &times;
    </button>
  </div>
</div>

<script>
// Função melhorada para buscar o produto do usuário na tabela HTML
function getProductFromTable(username) {
  
  // Primeiro, vamos tentar encontrar a tabela
  let tableBody = document.getElementById("usuariosTableBody");
  if (!tableBody) {
    console.error("❌ Elemento #usuariosTableBody não encontrado! Tentando outros seletores...");
    
    // Tentar outros seletores comuns
    tableBody = document.querySelector("tbody");
    if (!tableBody) {
      tableBody = document.querySelector("table tbody");
    }
    if (!tableBody) {
      tableBody = document.querySelector(".table tbody");
    }
    
    if (!tableBody) {
      console.error("❌ Nenhuma tabela encontrada!");
      return null;
    } else {
    }
  } else {
  }
  
  const rows = tableBody.querySelectorAll("tr");
  
  if (rows.length === 0) {
    console.warn("❌ Nenhuma linha encontrada na tabela");
    return null;
  }

  // Analisar cada linha
  for (let i = 0; i < rows.length; i++) {
    const row = rows[i];
    const cells = row.querySelectorAll("td");
    
    if (cells.length === 0) {
      continue;
    }
    
    // Analisar primeira célula (username)
    if (cells[0]) {
      // Tentar diferentes seletores para o username
      const possibleUsernameSelectors = [
        "p.font-medium",
        "p",
        ".font-medium", 
        "span.font-medium",
        "span",
        "div",
        "strong",
        "b"
      ];
      
      let foundUsername = null;
      let usernameElement = null;
      
      for (const selector of possibleUsernameSelectors) {
        usernameElement = cells[0].querySelector(selector);
        if (usernameElement) {
          foundUsername = usernameElement.textContent.trim();
          break;
        }
      }
      
      // Se não encontrou com seletores, usar texto direto da célula
      if (!foundUsername) {
        foundUsername = cells[0].textContent.trim();
      }
      
      // Verificar se corresponde ao username procurado
      if (foundUsername === username) {
        
        // Analisar segunda célula (produto)
        if (cells.length > 1 && cells[1]) {
          // Tentar diferentes seletores para o produto
          const possibleProductSelectors = [
            "p.font-medium",
            "p",
            ".font-medium",
            "span.font-medium", 
            "span",
            "div",
            "strong",
            "b"
          ];
          
          let foundProduct = null;
          let productElement = null;
          
          for (const selector of possibleProductSelectors) {
            productElement = cells[1].querySelector(selector);
            if (productElement) {
              foundProduct = productElement.textContent.trim();
              break;
            }
          }
          
          // Se não encontrou com seletores, usar texto direto da célula
          if (!foundProduct) {
            foundProduct = cells[1].textContent.trim();
          }
          
          if (foundProduct) {
            return foundProduct;
          } else {
            console.warn("❌ Produto não encontrado na segunda célula");
          }
        } else {
          console.warn("❌ Segunda célula não encontrada");
        }
      }
    }
  }
  
  console.warn(`❌ PRODUTO NÃO ENCONTRADO para username: "${username}"`);
  return null;
}

// Função para abrir o modal de gerenciamento
function abrirGerenciar(username) {
  
  // Preencher campos básicos do modal
  document.getElementById("usuarioSelecionado").textContent = username;
  document.getElementById("usernameAlterarSenha").value = username;
  document.getElementById("usernameResetHwid").value = username;
  
  // Buscar e exibir produto do usuário
  const userProduct = getProductFromTable(username);
  document.getElementById("produtoAtual").textContent = userProduct || "N/A";
  document.getElementById("produtoAtualDetalhado").textContent = userProduct || "N/A";
  
  // Configurar botão de adicionar dias
  const btnAbrirModalDias = document.getElementById("btnAbrirModalDias");
  btnAbrirModalDias.onclick = function() {
    closeModal("modalGerenciarUsuario");
    // Verificar se a função abrirModalAdicionarDias existe
    if (typeof abrirModalAdicionarDias === 'function') {
      abrirModalAdicionarDias(username, userProduct);
    } else {
      alert("Modal de adicionar dias não está disponível. Verifique se o arquivo modal_adicionar_dias_novo.php foi incluído.");
    }
  };
  
  // Abrir o modal
  openModal("modalGerenciarUsuario");
}

// Event listeners
document.addEventListener("DOMContentLoaded", function() {
  
  // Formulário alterar senha
  const formSenha = document.getElementById("formAlterarSenhaGerenciar");
  if (formSenha) {
    formSenha.addEventListener("submit", async function(e) {
      e.preventDefault();
      
      const username = document.getElementById("usernameAlterarSenha").value;
      const novaSenha = this.querySelector('input[name="nova_senha"]').value;
      
      // Usar modal bonito de confirmação
      mostrarConfirmacao(
        'Alterar Senha',
        `Tem certeza que deseja alterar a senha do usuário "${username}"?`,
        () => {
          executarAlteracaoSenha(this);
        },
        null,
        'warning'
      );
    });
  }
  
  // Formulário reset HWID
  const formHwid = document.getElementById("formResetHwidGerenciar");
  if (formHwid) {
    formHwid.addEventListener("submit", async function(e) {
      e.preventDefault();
      
      const username = document.getElementById("usernameResetHwid").value;
      
      // Usar modal bonito de confirmação
      mostrarConfirmacao(
        'Resetar HWID',
        `Tem certeza que deseja resetar o HWID do usuário "${username}"?`,
        () => {
          executarResetHwid(this);
        },
        null,
        'warning'
      );
    });
  }
  
});

// Função para executar alteração de senha
async function executarAlteracaoSenha(form) {
  const formData = new FormData(form);
  try {
    const response = await fetch("scripts/seller_actions.php", { method: "POST", body: formData });
    const result = await response.json();
    if (result.success) { 
      mostrarSucesso(result.message);
      closeModal("modalGerenciarUsuario");
      setTimeout(() => {
        if (typeof fetchUsers === 'function') {
          fetchUsers();
        }
      }, 1500);
    } else { 
      mostrarErro(result.message || "Erro ao alterar senha");
    }
  } catch (error) { 
    mostrarErro("Erro de conexão: " + error.message);
  }
}

// Função para executar reset HWID
async function executarResetHwid(form) {
  const formData = new FormData(form);
  try {
    const response = await fetch("scripts/seller_actions.php", { method: "POST", body: formData });
    const result = await response.json();
    if (result.success) { 
      mostrarSucesso(result.message);
      closeModal("modalGerenciarUsuario");
      setTimeout(() => {
        if (typeof fetchUsers === 'function') {
          fetchUsers();
        }
      }, 1500);
    } else { 
      mostrarErro(result.message || "Erro ao resetar HWID");
    }
  } catch (error) { 
    mostrarErro("Erro de conexão: " + error.message);
  }
}
</script>


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



<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"f288f319f18e490b9a89e8a7805b0616","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>

