# Usa una imagen base de PHP
FROM mcr.microsoft.com/devcontainers/php:1-8.2-bullseye


# Configura el usuario
ARG USERNAME=vscode
ARG USER_UID=1000
ARG USER_GID=$USER_UID

# Crea el usuario si no existe
RUN id -u $USERNAME &>/dev/null || useradd -m -s /bin/bash -u $USER_UID -g $USER_GID $USERNAME

# Configura la carpeta de trabajo
WORKDIR /workspace

# Exponer el puerto 8080
EXPOSE 8080
