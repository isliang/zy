create database zy_db;
use zy_db;
CREATE TABLE `important_date` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
    `title` varchar(20) not null default '' comment '名称',
    `date` timestamp not null default CURRENT_TIMESTAMP comment '时间',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='重要的时间';
insert into important_date values (null, 'our', '2018-01-03 15:00:00'), (null, 'girl', '2020-05-18 08:49:00');