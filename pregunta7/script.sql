select
sum(case when x.direccion='La Paz' then x.monto_total end) as LA_PAZ,
sum(case when x.direccion='Cochabamba' then x.monto_total end) as COCHABAMBA,
sum(case when x.direccion='Santa Cruz' then x.monto_total end) as SANTA_CRUZ,
sum(case when x.direccion='Oruro' then x.monto_total end) as ORURO,
sum(case when x.direccion='Potosi' then x.monto_total end) as POTOSI,
sum(case when x.direccion='Chuquisaca' then x.monto_total end) as CHUQUISACA,
sum(case when x.direccion='Tarija' then x.monto_total end) as TARIJA,
sum(case when x.direccion='Beni' then x.monto_total end) as BENI,
sum(case when x.direccion='Pando' then x.monto_total end) as PANDO
from (select t.direccion, sum(m.monto) as monto_total
from (select DISTINCT direccion
        from persona
        ) t, (SELECT c.id_persona, p.direccion, sum(c.saldo) as monto
                    from cuenta_bancaria c, persona p
                    where p.id_persona=c.id_persona
                    group by c.id_persona, p.direccion) m
where m.direccion = t.direccion
group by t.direccion) x