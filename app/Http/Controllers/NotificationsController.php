<?php


namespace App\Http\Controllers;


class NotificationsController extends Controller
{
    /**
     * UC 01 - Classe Genérica para Envio / Recebimento de Notificações
     * 1) A classe será a unica responsável por gravar novas notificações na tabela a ser criada no banco;
     * 2) Deverá realizar de maneira automática a verificação de novas mensagens destinadas ao usuário atual e exibi-las em quaisquer rotas que estiver sendo acessada;
     * 3) Deverá apresentar um botão de "OK" na notificação para confirmar que o usuário realmente leu a notificação, antes de marcá-la como lida no banco de dados;
     * 4) Seus métodos deverão ser os mesmos para qualquer controler que a instancie.
     *
     * Usei o padrão singleton para caso formos utilizar o php como serviço e websocket para notificações em tempo real futuramente.
     *
     */

    private static $NotificationsController;


    final private function __construct()
    {
    }

    final private function __clone()
    {
    }

    final private function __wakeup()
    {
    }

    public static function getInstance(): NotificationsController
    {
        if (self::$NotificationsController === null) {
            self::$NotificationsController = new self();
        }
        return self::$NotificationsController;
    }

    /**
     * @param $to - usuário que irá receber a notificação
     * @param $message - mensagem da notificação
     * @param null $from - usuário que esta enviando a notificação, se null a notificação foi gerada pelo sistema
     */
    public static function newNotification($to, $message, $from = null)
    {

    }

    public static function readNotifications()
    {

    }

    public static function setNotificationAsRead($notification_id)
    {

    }

}