select id_estoque, nroproduto, nomeproduto, quantidade, fornecedor, nome_categoria 
from estoque as e
left join categoria as c on e.id_categoria = c.id_categoria