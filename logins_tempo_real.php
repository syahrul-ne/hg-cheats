<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Logins em Tempo Real - HG CHEATS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <style>
        .pulse-dot {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .status-online {
            color: #10b981;
        }
        
        .status-offline {
            color: #ef4444;
        }
        
        .filter-btn {
            transition: all 0.3s ease;
        }
        
        .filter-btn.active {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
            border-color: #6366f1;
        }
        
        .loading-spinner {
            border: 3px solid #334155;
            border-top: 3px solid #6366f1;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Tema escuro alinhado com o site */
        .bg-card {
            background-color: #1e293b;
            border: 1px solid rgba(148, 163, 184, 0.1);
        }
        
        .bg-card-secondary {
            background-color: #0f172a;
            border: 1px solid rgba(148, 163, 184, 0.05);
        }
        
        .text-primary {
            color: #e2e8f0;
        }
        
        .text-secondary {
            color: #94a3b8;
        }
        
        .gradient-primary {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        }
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
    
    <a href="logins_tempo_real" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-gradient-to-r from-emerald-600 to-emerald-700 text-white shadow-lg border border-emerald-500/50">
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
                <!-- Header -->
                <div class="mb-8 animate-fadeInUp">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h2 class="text-2xl font-bold text-primary mb-2 flex items-center gap-3">
                                <i class="fa-solid fa-circle-dot text-emerald-400 pulse-dot"></i>
                                Logins em Tempo Real
                            </h2>
                            <p class="text-secondary">Monitore todos os usuários online em tempo real</p>
                        </div>
                    </div>
                </div>

                <!-- Estatísticas Gerais -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8 animate-fadeInUp delay-200">
                    <div class="bg-card rounded-xl p-6 card-hover">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-emerald-500/20 mr-4">
                                <i class="fa-solid fa-circle text-emerald-400 text-xl pulse-dot"></i>
                            </div>
                            <div>
                                <p class="text-sm text-secondary">Total Online</p>
                                <p class="text-2xl font-bold text-emerald-400" id="total-online">0</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-card rounded-xl p-6 card-hover">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-500/20 mr-4">
                                <i class="fa-solid fa-user-tie text-blue-400 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-secondary">Vendedores Ativos</p>
                                <p class="text-2xl font-bold text-blue-400" id="vendedores-ativos">0</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-card rounded-xl p-6 card-hover">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-500/20 mr-4">
                                <i class="fa-solid fa-clock text-purple-400 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-secondary">Última Atualização</p>
                                <p class="text-sm font-medium text-purple-400" id="ultima-atualizacao">--:--:--</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-card rounded-xl p-6 card-hover">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-500/20 mr-4">
                                <i class="fa-solid fa-arrows-rotate text-yellow-400 text-xl" id="refresh-icon"></i>
                            </div>
                            <div>
                                <p class="text-sm text-secondary">Auto Refresh</p>
                                <p class="text-sm font-medium text-yellow-400">5 segundos</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filtros -->
                <div class="bg-card rounded-xl p-6 mb-8 animate-fadeInUp delay-300">
                    <div class="flex flex-wrap items-center gap-4">
                        <h3 class="text-lg font-semibold text-primary flex items-center gap-2">
                            <i class="fa-solid fa-filter text-indigo-400"></i>Filtros
                        </h3>
                        
                        <button class="filter-btn active px-4 py-2 rounded-lg border border-slate-600 hover:border-indigo-400 transition-all" data-vendedor="todos">
                            <i class="fa-solid fa-globe mr-2"></i>Todos
                        </button>
                        
                        <button id="refresh-btn" class="px-4 py-2 gradient-primary text-white rounded-lg hover:opacity-90 transition-all">
                            <i class="fa-solid fa-arrows-rotate mr-2"></i>Atualizar
                        </button>
                        
                        <!-- Controle de itens por página -->
                        <div class="flex items-center gap-2">
                            <label class="text-sm text-secondary">Por página:</label>
                            <select id="limit-select" class="px-3 py-1 bg-card-secondary border border-slate-600 rounded-lg text-primary focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <option value="10">10</option>
                                <option value="20" selected>20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Contadores por Vendedor -->
                <div class="bg-card rounded-xl p-6 mb-8 animate-fadeInUp delay-400">
                    <h3 class="text-lg font-semibold text-primary mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-chart-column text-indigo-400"></i>Usuários Online por Vendedor
                    </h3>
                    <div id="contadores-vendedor" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        <!-- Contadores serão inseridos aqui via JavaScript -->
                    </div>
                </div>

                <!-- Lista de Usuários Online -->
                <div class="bg-card rounded-xl animate-fadeInUp delay-500">
                    <div class="p-6 border-b border-slate-700/50">
                        <h3 class="text-lg font-semibold text-primary flex items-center gap-2">
                            <i class="fa-solid fa-list text-indigo-400"></i>Usuários Online
                        </h3>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-card-secondary">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-secondary uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-secondary uppercase tracking-wider">
                                        Login
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-secondary uppercase tracking-wider">
                                        Vendedor
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-secondary uppercase tracking-wider">
                                        Produto
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-secondary uppercase tracking-wider">
                                        Último Ping
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-secondary uppercase tracking-wider">
                                        Expira em
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="usuarios-tbody" class="divide-y divide-slate-700/50">
                                <!-- Usuários serão inseridos aqui via JavaScript -->
                            </tbody>
                        </table>
                    </div>
                    
                    <div id="loading-indicator" class="p-8 text-center">
                        <div class="loading-spinner mx-auto mb-4"></div>
                        <p class="text-secondary">Carregando usuários online...</p>
                    </div>
                    
                    <div id="no-users" class="p-8 text-center hidden">
                        <i class="fa-solid fa-users-slash text-slate-500 text-4xl mb-4"></i>
                        <p class="text-secondary">Nenhum usuário online no momento</p>
                    </div>
                    
                    <!-- Paginação -->
                    <div id="pagination-container" class="bg-card-secondary px-6 py-4 border-t border-slate-700/50 hidden">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                            <div class="text-sm text-secondary" id="pagination-info">
                                <!-- Informações de paginação serão inseridas aqui -->
                            </div>
                            <div class="flex items-center gap-2" id="pagination-links">
                                <!-- Links de paginação serão inseridos aqui -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        let currentFilter = 'todos';
        let currentPage = 1;
        let currentLimit = 20;
        let refreshInterval;
        
        // Inicializar página
        document.addEventListener('DOMContentLoaded', function() {
            carregarVendedores();
            carregarUsuariosOnline();
            iniciarAutoRefresh();
            
            // Event listeners
            document.getElementById('refresh-btn').addEventListener('click', carregarUsuariosOnline);
            document.getElementById('limit-select').addEventListener('change', function() {
                currentLimit = parseInt(this.value);
                currentPage = 1; // Reset para primeira página
                carregarUsuariosOnline();
            });
            
            // Filtros de botão
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    currentFilter = this.dataset.vendedor;
                    currentPage = 1; // Reset para primeira página
                    carregarUsuariosOnline();
                });
            });
        });
        
        // Carregar lista de vendedores
        function carregarVendedores() {
            fetch('../api/logins_tempo_real.php?request=vendedores_list')
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Criar botões dinâmicos para cada vendedor
                        const filtersContainer = document.querySelector('.bg-card .flex');
                        
                        // Remover botões de vendedores existentes (manter apenas "Todos" e "Atualizar")
                        const vendedorButtons = filtersContainer.querySelectorAll('.filter-btn:not([data-vendedor="todos"])');
                        vendedorButtons.forEach(btn => btn.remove());
                        
                        // Adicionar botões para cada vendedor
                        data.vendedores.forEach(vendedor => {
                            const button = document.createElement('button');
                            button.className = 'filter-btn px-4 py-2 rounded-lg border border-slate-600 hover:border-indigo-400 transition-all';
                            button.dataset.vendedor = vendedor;
                            button.innerHTML = `<i class="fa-solid fa-user mr-2"></i>${vendedor}`;
                            
                            button.addEventListener('click', function() {
                                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                                this.classList.add('active');
                                currentFilter = this.dataset.vendedor;
                                currentPage = 1; // Reset para primeira página
                                carregarUsuariosOnline();
                            });
                            
                            // Inserir antes do botão "Atualizar"
                            const refreshBtn = document.getElementById('refresh-btn');
                            filtersContainer.insertBefore(button, refreshBtn);
                        });
                    }
                })
                .catch(error => console.error('Erro ao carregar vendedores:', error));
        }
        
        // Carregar usuários online
        function carregarUsuariosOnline() {
            const refreshIcon = document.getElementById('refresh-icon');
            refreshIcon.classList.add('fa-spin');
            
            const url = `../api/logins_tempo_real.php?request=online_users&page=${currentPage}&limit=${currentLimit}${currentFilter !== 'todos' ? '&vendedor=' + encodeURIComponent(currentFilter) : ''}`;
            
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        atualizarEstatisticas(data);
                        atualizarContadoresVendedor(data.contadores_por_vendedor);
                        atualizarTabelaUsuarios(data.usuarios);
                        atualizarPaginacao(data.pagination);
                        document.getElementById('ultima-atualizacao').textContent = new Date().toLocaleTimeString();
                    }
                })
                .catch(error => {
                    console.error('Erro ao carregar usuários online:', error);
                })
                .finally(() => {
                    refreshIcon.classList.remove('fa-spin');
                    document.getElementById('loading-indicator').style.display = 'none';
                });
        }
        
        // Atualizar estatísticas
        function atualizarEstatisticas(data) {
            document.getElementById('total-online').textContent = data.total_online || 0;
            document.getElementById('vendedores-ativos').textContent = data.contadores_por_vendedor.length || 0;
        }
        
        // Atualizar contadores por vendedor
        function atualizarContadoresVendedor(contadores) {
            const container = document.getElementById('contadores-vendedor');
            container.innerHTML = '';
            
            if (contadores.length === 0) {
                container.innerHTML = '<p class="text-slate-500 col-span-full text-center">Nenhum vendedor com usuários online</p>';
                return;
            }
            
            contadores.forEach(contador => {
                const div = document.createElement('div');
                div.className = 'bg-card-secondary p-4 rounded-lg border border-slate-700/50 card-hover cursor-pointer';
                div.dataset.vendedor = contador.vendedor;
                
                div.innerHTML = `
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-secondary">${contador.vendedor || 'Sem vendedor'}</p>
                            <p class="text-lg font-bold text-emerald-400">${contador.total} online</p>
                        </div>
                        <div class="p-2 rounded-full bg-emerald-500/20">
                            <i class="fa-solid fa-circle text-emerald-400 pulse-dot"></i>
                        </div>
                    </div>
                `;
                
                // Adicionar evento de clique para filtrar por vendedor
                div.addEventListener('click', function() {
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                    
                    // Encontrar e ativar o botão correspondente
                    const vendedorBtn = document.querySelector(`[data-vendedor="${contador.vendedor}"]`);
                    if (vendedorBtn) {
                        vendedorBtn.classList.add('active');
                    }
                    
                    currentFilter = contador.vendedor;
                    currentPage = 1; // Reset para primeira página
                    carregarUsuariosOnline();
                });
                
                container.appendChild(div);
            });
        }
        
        // Atualizar tabela de usuários
        function atualizarTabelaUsuarios(usuarios) {
            const tbody = document.getElementById('usuarios-tbody');
            const noUsers = document.getElementById('no-users');
            
            if (usuarios.length === 0) {
                tbody.innerHTML = '';
                noUsers.classList.remove('hidden');
                return;
            }
            
            noUsers.classList.add('hidden');
            
            // Garantir ordenação alfabética no frontend também
            usuarios.sort((a, b) => a.login.localeCompare(b.login));
            
            tbody.innerHTML = usuarios.map(usuario => {
                const expiraEm = new Date(usuario.expira_em);
                const agora = new Date();
                const diasRestantes = Math.ceil((expiraEm - agora) / (1000 * 60 * 60 * 24));
                
                const statusClass = usuario.segundos_offline <= 480 ? 'status-online' : 'status-offline';
                const statusIcon = usuario.segundos_offline <= 480 ? 'fa-circle' : 'fa-circle-dot';
                const statusText = usuario.segundos_offline <= 480 ? 'Online' : `${usuario.segundos_offline}s atrás`;
                
                return `
                    <tr class="hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid ${statusIcon} ${statusClass} ${usuario.segundos_offline <= 5 ? 'pulse-dot' : ''}"></i>
                                <span class="text-sm ${statusClass}">${statusText}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-medium text-primary">${usuario.login}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-secondary">${usuario.vendedor || 'N/A'}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-secondary">${usuario.product || 'N/A'}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-secondary">${new Date(usuario.last_ping).toLocaleString()}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm ${diasRestantes > 7 ? 'text-green-400' : diasRestantes > 3 ? 'text-yellow-400' : 'text-red-400'}">
                                ${diasRestantes > 0 ? `${diasRestantes} dias` : 'Expirado'}
                            </span>
                        </td>
                    </tr>
                `;
            }).join('');
        }
        
        // Atualizar paginação
        function atualizarPaginacao(pagination) {
            const paginationContainer = document.getElementById('pagination-container');
            const paginationInfo = document.getElementById('pagination-info');
            const paginationLinks = document.getElementById('pagination-links');
            
            // Mostrar/ocultar container de paginação
            if (pagination.total_pages <= 1) {
                paginationContainer.classList.add('hidden');
                return;
            } else {
                paginationContainer.classList.remove('hidden');
            }
            
            // Atualizar informações
            const start = pagination.offset + 1;
            const end = Math.min(pagination.offset + pagination.limit, pagination.total_usuarios);
            paginationInfo.textContent = `Mostrando ${start}-${end} de ${pagination.total_usuarios} usuários online`;
            
            // Limpar links existentes
            paginationLinks.innerHTML = '';
            
            // Botão "Anterior"
            if (pagination.current_page > 1) {
                const prevBtn = document.createElement('button');
                prevBtn.className = 'px-3 py-2 text-sm bg-slate-700 hover:bg-slate-600 text-white rounded-lg transition-colors';
                prevBtn.innerHTML = '<i class="fa-solid fa-chevron-left"></i>';
                prevBtn.onclick = () => {
                    currentPage = pagination.current_page - 1;
                    carregarUsuariosOnline();
                };
                paginationLinks.appendChild(prevBtn);
            }
            
            // Números das páginas
            const startPage = Math.max(1, pagination.current_page - 2);
            const endPage = Math.min(pagination.total_pages, pagination.current_page + 2);
            
            for (let i = startPage; i <= endPage; i++) {
                const pageBtn = document.createElement('button');
                pageBtn.className = `px-3 py-2 text-sm rounded-lg transition-colors ${
                    i === pagination.current_page 
                        ? 'bg-indigo-600 text-white' 
                        : 'bg-slate-700 hover:bg-slate-600 text-white'
                }`;
                pageBtn.textContent = i;
                pageBtn.onclick = () => {
                    currentPage = i;
                    carregarUsuariosOnline();
                };
                paginationLinks.appendChild(pageBtn);
            }
            
            // Botão "Próximo"
            if (pagination.current_page < pagination.total_pages) {
                const nextBtn = document.createElement('button');
                nextBtn.className = 'px-3 py-2 text-sm bg-slate-700 hover:bg-slate-600 text-white rounded-lg transition-colors';
                nextBtn.innerHTML = '<i class="fa-solid fa-chevron-right"></i>';
                nextBtn.onclick = () => {
                    currentPage = pagination.current_page + 1;
                    carregarUsuariosOnline();
                };
                paginationLinks.appendChild(nextBtn);
            }
        }
        
        // Auto refresh
        function iniciarAutoRefresh() {
            refreshInterval = setInterval(carregarUsuariosOnline, 5000);
        }
        
        // Parar auto refresh quando a página não estiver visível
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                clearInterval(refreshInterval);
            } else {
                iniciarAutoRefresh();
            }
        });
    </script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"f288f319f18e490b9a89e8a7805b0616","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>

