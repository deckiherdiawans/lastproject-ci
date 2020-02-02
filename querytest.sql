SELECT b.name AS 'agent', COUNT(a.id) AS 'ticket',
TIMESTAMPDIFF(minute, a.start_time, a.finish_time) AS 'time'
FROM `tickets` a inner join `agents` b
ON a.agent_name = b.name GROUP BY b.name;


SELECT b.name AS 'agents', a.id AS 'ID',
TIMESTAMPDIFF(minute, a.start_time, a.finish_time) AS 'time'
FROM `tickets` a inner join `agents` b
ON a.agent_name = b.name ORDER BY a.date_created DESC LIMIT 1;